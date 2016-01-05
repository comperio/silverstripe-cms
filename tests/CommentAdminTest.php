<?php

class CommentAdminTest extends FunctionalTest
{
    
    public static $fixture_file = 'cms/tests/CMSMainTest.yml';
    
    public function testNumModerated()
    {
        $comm = new CommentAdmin();
        $resp = $comm->NumModerated();
        $this->assertEquals(1, $resp);
    }
    
    public function testNumUnmoderated()
    {
        $comm = new CommentAdmin();
        $resp = $comm->NumUnmoderated();
        $this->assertEquals(2, $resp);
    }
    
    public function testNumSpam()
    {
        $comm = new CommentAdmin();
        $resp = $comm->NumSpam();
        $this->assertEquals(0, $resp);
    }
    
    public function testdeletemarked()
    {
        $comm = $this->objFromFixture('PageComment', 'Comment1');
        $id = $comm->ID;
        $this->logInWithPermission('CMS_ACCESS_CommentAdmin');
        $response = $this->get("admin/comments/EditForm/field/Comments/item/$id/delete");
        $checkComm = DataObject::get_by_id('PageComment', $id);

        $this->assertFalse($checkComm);
    }
}
