<?php

class SSReportTest extends SapphireTest
{
    
    public function testCanSortBy()
    {
        $report = new SSReportTest_FakeTest();
        $this->assertTrue($report->sourceQuery(array())->canSortBy('Title ASC'));
        $this->assertTrue($report->sourceQuery(array())->canSortBy('Title DESC'));
        $this->assertTrue($report->sourceQuery(array())->canSortBy('Title'));
    }
}

class SSReportTest_FakeTest extends SS_Report implements TestOnly
{
    public function title()
    {
        return 'Report title';
    }
    public function columns()
    {
        return array(
            "Title" => array(
                "title" => "Page Title"
            )
        );
    }
    public function sourceRecords($params, $sort, $limit)
    {
        return new DataObjectSet();
    }
}
