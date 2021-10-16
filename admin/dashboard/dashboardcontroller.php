<?php
    require_once ("../../include/initialize.php");

    //$sqlinquirycount = mysqli_query($conn,"SELECT * FROM inquirytable");
    //$inquirycount = mysqli_num_rows($sqlinquirycount);

    //$sqlinquirycount2 = mysqli_query($conn,"SELECT * FROM inquirytable WHERE messagestatus = 'Active'");
    //$inqunread = mysqli_num_rows($sqlinquirycount2);

    //$sqlinquirycount3 = mysqli_query($conn,"SELECT * FROM inquirytable WHERE messagestatus = 'Read'");
    //$inqread = mysqli_num_rows($sqlinquirycount3);

    $mydb->setQuery("SELECT * FROM `tblinquiry` WHERE INQSTATUS = 'READ'");
    $eInquiry = $mydb->executeQuery();
    $inquiryReadNum = $eInquiry->num_rows;

    $mydb->setQuery("SELECT * FROM `tblinquiry` WHERE INQSTATUS = 'NEW'");
    $eInquiry = $mydb->executeQuery();
    $inquiryUnreadNum = $eInquiry->num_rows;

    $mydb->setQuery("SELECT * FROM `tblsummary` WHERE ORDEREDSTATS = 'PENDING'");
    $eOrder = $mydb->executeQuery();
    $orderPendingNum = $eOrder->num_rows;

    $mydb->setQuery("SELECT * FROM `tblsummary` WHERE ORDEREDSTATS = 'CONFIRMED'");
    $eOrder = $mydb->executeQuery();
    $orderConfirmedNum = $eOrder->num_rows;

    $mydb->setQuery("SELECT * FROM `tblsummary` WHERE ORDEREDSTATS = 'DELIVERED'");
    $eOrder = $mydb->executeQuery();
    $orderDeliveredNum = $eOrder->num_rows;

    $mydb->setQuery("SELECT * FROM `tbluseraccount` WHERE U_Status = 'Active'");
    $eUser = $mydb->executeQuery();
    $userActiveNum = $eUser->num_rows; 

    $mydb->setQuery("SELECT * FROM `tbluseraccount` WHERE U_Status = 'Inactive'");
    $eUser = $mydb->executeQuery();
    $userInactiveNum = $eUser->num_rows; 
    
    $mydb->setQuery("SELECT * FROM `tblproduct` WHERE PROD_STATUS = 'Active'");
    $eProduct = $mydb->executeQuery();
    $productActiveNum = $eProduct->num_rows;

    $mydb->setQuery("SELECT * FROM `tblproduct` WHERE PROD_STATUS = 'Inactive'");
    $eProduct = $mydb->executeQuery();
    $productInactiveNum = $eProduct->num_rows;

?>