<?php
/**
 * Represents a single comment on a page
 * 
 * @package cms
 * @subpackage comments
 */
class PageComment extends DataObject
{
    
    public static $db = array(
        "Name" => "Varchar(200)",
        "Comment" => "Text",
        "IsSpam" => "Boolean",
        "NeedsModeration" => "Boolean",
        "CommenterURL" => "Varchar(255)",
        "SessionID" => "Varchar(255)"
    );

    public static $has_one = array(
        "Parent" => "SiteTree",
        "Author" => "Member" // Only set when the user is logged in when posting 
    );
    
    public static $has_many = array();
    
    public static $many_many = array();
    
    public static $defaults = array();
    
    public static $casting = array(
        "RSSTitle" => "Varchar",
    );

    // Number of comments to show before paginating
    public static $comments_per_page = 10;
    
    public static $moderate = false;
    
    public static $bbcode = false;

    /**
     * Return a link to this comment
     * @return string link to this comment.
     */
    public function Link()
    {
        return $this->Parent()->Link() . '#PageComment_'. $this->ID;
    }
    
    public function getRSSName()
    {
        if ($this->Name) {
            return $this->Name;
        } elseif ($this->Author()) {
            return $this->Author()->getName();
        }
    }
    
    public function ParsedBBCode()
    {
        $parser = new BBCodeParser($this->Comment);
        return $parser->parse();
    }

    public function DeleteLink()
    {
        $token = SecurityToken::inst();
        $link = $token->addToUrl("PageComment_Controller/deletecomment/$this->ID");
        
        return ($this->canDelete()) ? $link : false;
    }
    
    public function CommentTextWithLinks()
    {
        $pattern = '|([a-zA-Z]+://)([a-zA-Z0-9?&%.;:/=+_-]*)|is';
        $replace = '<a rel="nofollow" href="$1$2">$1$2</a>';
        return preg_replace($pattern, $replace, $this->Comment);
    }
    
    public function SpamLink()
    {
        $token = SecurityToken::inst();
        $link = $token->addToUrl("PageComment_Controller/reportspam/$this->ID");
        return ($this->canEdit() && !$this->IsSpam) ? $link : false;
    }
    
    public function HamLink()
    {
        $token = SecurityToken::inst();
        $link = $token->addToUrl("PageComment_Controller/reportham/$this->ID");
        return ($this->canEdit() && $this->IsSpam) ? $link : false;
    }
    
    public function ApproveLink()
    {
        $token = SecurityToken::inst();
        $link = $token->addToUrl("PageComment_Controller/approve/$this->ID");
        return ($this->canEdit() && $this->NeedsModeration) ? $link : false;
    }
    
    public function SpamClass()
    {
        if ($this->getField('IsSpam')) {
            return 'spam';
        } elseif ($this->getField('NeedsModeration')) {
            return 'unmoderated';
        } else {
            return 'notspam';
        }
    }
    
    
    public function getRSSTitle()
    {
        return sprintf(
            _t('PageComment.COMMENTBY', "Comment by '%s' on %s", PR_MEDIUM, 'Name, Page Title'),
            Convert::raw2xml($this->getRSSName()),
            $this->Parent()->Title
        );
    }
    


    
    public function PageTitle()
    {
        return $this->Parent()->Title;
    }
    
    public static function enableModeration()
    {
        self::$moderate = true;
    }

    public static function moderationEnabled()
    {
        return self::$moderate;
    }
    
    public static function enableBBCode()
    {
        self::$bbcode = true;
    }

    public static function bbCodeEnabled()
    {
        return self::$bbcode;
    }
    
    /**
     *
     * @param boolean $includerelations a boolean value to indicate if the labels returned include relation fields
     * 
     */
    public function fieldLabels($includerelations = true)
    {
        $labels = parent::fieldLabels($includerelations);
        $labels['Name'] = _t('PageComment.Name', 'Author Name');
        $labels['Comment'] = _t('PageComment.Comment', 'Comment');
        $labels['IsSpam'] = _t('PageComment.IsSpam', 'Spam?');
        $labels['NeedsModeration'] = _t('PageComment.NeedsModeration', 'Needs Moderation?');
        
        return $labels;
    }
    
    /**
     * This method is called just before this object is
     * written to the database.
     * 
     * Specifically, make sure "http://" exists at the start
     * of the URL, if it doesn't have https:// or http://
     */
    public function onBeforeWrite()
    {
        parent::onBeforeWrite();
        
        $url = $this->CommenterURL;
        
        if ($url) {
            if (strtolower(substr($url, 0, 8)) != 'https://' && strtolower(substr($url, 0, 7)) != 'http://') {
                $this->CommenterURL = 'http://' . $url;
            }
        }
    }
    
    /**
     * This always returns true, and should be handled by {@link PageCommentInterface->CanPostComment()}.
     * 
     * @todo Integrate with PageCommentInterface::$comments_require_permission and $comments_require_login
     * 
     * @param Member $member
     * @return Boolean
     */
    public function canCreate($member = null)
    {
        return true;
    }
    
    /**
     * Checks for association with a page,
     * and {@link SiteTree->ProvidePermission} flag being set to TRUE.
     * Note: There's an additional layer of permission control
     * in {@link PageCommentInterface}.
     * 
     * @param Member $member
     * @return Boolean
     */
    public function canView($member = null)
    {
        if (!$member) {
            $member = Member::currentUser();
        }
        
        // Standard mechanism for accepting permission changes from decorators
        $extended = $this->extendedCan('canView', $member);
        if ($extended !== null) {
            return $extended;
        }
        
        $page = $this->Parent();
        return (
            ($page && $page->ProvideComments)
            || (bool)Permission::checkMember($member, 'CMS_ACCESS_CommentAdmin')
        );
    }
    
    /**
     * Checks for "CMS_ACCESS_CommentAdmin" permission codes
     * and {@link canView()}. 
     * 
     * @param Member $member
     * @return Boolean
     */
    public function canEdit($member = null)
    {
        if (!$member) {
            $member = Member::currentUser();
        }
        
        // Standard mechanism for accepting permission changes from decorators
        $extended = $this->extendedCan('canEdit', $member);
        if ($extended !== null) {
            return $extended;
        }
        
        if (!$this->canView($member)) {
            return false;
        }
        
        return (bool)Permission::checkMember($member, 'CMS_ACCESS_CommentAdmin');
    }
    
    /**
     * Checks for "CMS_ACCESS_CommentAdmin" permission codes
     * and {@link canEdit()}.
     * 
     * @param Member $member
     * @return Boolean
     */
    public function canDelete($member = null)
    {
        if (!$member) {
            $member = Member::currentUser();
        }
        
        // Standard mechanism for accepting permission changes from decorators
        $extended = $this->extendedCan('canDelete', $member);
        if ($extended !== null) {
            return $extended;
        }
        
        return $this->canEdit($member);
    }
}


/**
 * @package cms
 * @subpackage comments
 */
class PageComment_Controller extends Controller
{
    public function rss()
    {
        $parentcheck = isset($_REQUEST['pageid']) ? "\"ParentID\" = " . (int) $_REQUEST['pageid'] : "\"ParentID\" > 0";
        $unmoderatedfilter = Permission::check('ADMIN') ? '' : "AND \"NeedsModeration\" = 0";
        $comments = DataObject::get("PageComment", "$parentcheck AND \"IsSpam\" = 0 $unmoderatedfilter", "\"Created\" DESC", "", 10);
        if (!isset($comments)) {
            $comments = new DataObjectSet();
        }
        
        $rss = new RSSFeed($comments, "home/", "Page comments", "", "RSSTitle", "Comment", "RSSName");
        $rss->outputToBrowser();
    }
    
    /**
     * Deletes all comments on the page referenced by the url param pageid
     */
    public function deleteallcomments($request)
    {
        // Protect against CSRF on destructive action
        $token = SecurityToken::inst();
        if (!$token->checkRequest($request)) {
            return $this->httpError(400);
        }
        
        $pageId = $request->requestVar('pageid');
        if (preg_match('/^\d+$/', $pageId)) {
            $comments = DataObject::get("PageComment", sprintf("\"ParentID\" = %d", (int)$pageId));
            if ($comments) {
                foreach ($comments as $c) {
                    if ($c->canDelete()) {
                        $c->delete();
                    }
                }
            }
        }
        
        if (Director::is_ajax()) {
            echo "";
        } else {
            Director::redirectBack();
        }
    }
    
    public function deletecomment($request)
    {
        // Protect against CSRF on destructive action
        $token = SecurityToken::inst();
        if (!$token->checkRequest($request)) {
            return $this->httpError(400);
        }
        
        $comment = DataObject::get_by_id("PageComment", $request->param('ID'));
        if ($comment && $comment->canDelete()) {
            $comment->delete();
        }
        
        if (Director::is_ajax()) {
            echo "";
        } else {
            Director::redirectBack();
        }
    }
    
    public function approve($request)
    {
        // Protect against CSRF on destructive action
        $token = SecurityToken::inst();
        if (!$token->checkRequest($request)) {
            return $this->httpError(400);
        }
        
        $comment = DataObject::get_by_id("PageComment", $request->param('ID'));

        if ($comment && $comment->canEdit()) {
            $comment->NeedsModeration = false;
            $comment->write();
        
            // @todo Report to spamprotecter this is true

            if (Director::is_ajax()) {
                echo $comment->renderWith('PageCommentInterface_singlecomment');
            } else {
                Director::redirectBack();
            }
        }
    }
    
    public function reportspam($request)
    {
        // Protect against CSRF on destructive action
        $token = SecurityToken::inst();
        if (!$token->checkRequest($request)) {
            return $this->httpError(400);
        }
        
        $comment = DataObject::get_by_id("PageComment", $request->param('ID'));
        if ($comment && $comment->canEdit()) {
            // if spam protection module exists
            if (class_exists('SpamProtectorManager')) {
                SpamProtectorManager::send_feedback($comment, 'spam');
            }
            
            // If Akismet is enabled
            elseif (SSAkismet::isEnabled()) {
                try {
                    $akismet = new SSAkismet();
                    $akismet->setCommentAuthor($comment->getField('Name'));
                    $akismet->setCommentContent($comment->getField('Comment'));
                    $akismet->submitSpam();
                } catch (Exception $e) {
                    // Akismet didn't work, most likely the service is down.
                }
            }
            
            $comment->IsSpam = true;
            $comment->NeedsModeration = false;
            $comment->write();
        }

        if (Director::is_ajax()) {
            if (SSAkismet::isEnabled() && SSAkismet::getSaveSpam()) {
                echo $comment->renderWith('PageCommentInterface_singlecomment');
            } else {
                echo '';
            }
        } else {
            Director::redirectBack();
        }
    }
    /**
     * Report a Spam Comment as valid comment (not spam)
     */
    public function reportham($request)
    {
        // Protect against CSRF on destructive action
        $token = SecurityToken::inst();
        if (!$token->checkRequest($request)) {
            return $this->httpError(400);
        }
        
        $comment = DataObject::get_by_id("PageComment", $request->param('ID'));
        if ($comment && $comment->canEdit()) {
            // if spam protection module exists
            if (class_exists('SpamProtectorManager')) {
                SpamProtectorManager::send_feedback($comment, 'ham');
            }
            
            if (SSAkismet::isEnabled()) {
                try {
                    $akismet = new SSAkismet();
                    $akismet->setCommentAuthor($comment->getField('Name'));
                    $akismet->setCommentContent($comment->getField('Comment'));
                    $akismet->submitHam();
                } catch (Exception $e) {
                    // Akismet didn't work, most likely the service is down.
                }
            }
            $comment->setField('IsSpam', false);
            $comment->write();
        }

        if (Director::is_ajax()) {
            echo $comment->renderWith('PageCommentInterface_singlecomment');
        } else {
            Director::redirectBack();
        }
    }
}
