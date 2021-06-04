


function checkid() // Used in room details - admin
{
    var xmlhttp;
    var id=document.getElementById("mid").value;  
    if (id != "")
    {
        document.getElementById("checkloading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("checkloading").innerHTML="";
                   // document.getElementById("mparish").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxForaneParish.php?val="+id+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("mparish").innerHTML="<option value=''>All</option>";
}
function loadParish() // Used in room details - admin
{
    var xmlhttp;
    var id=document.getElementById("mforane").value;  
    if (id != "all")
    {
        document.getElementById("parishLoading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("parishLoading").innerHTML="";
                    document.getElementById("mparish").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxForaneParish.php?val="+id+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("mparish").innerHTML="<option value=''>All</option>";
}

function loadForaneParish() // Used in room details - admin
{
    var xmlhttp;
    var id=document.getElementById("mforane").value; 
    document.getElementById("parishLoading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
    if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    else // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("parishLoading").innerHTML="";
                document.getElementById("mparish").innerHTML=xmlhttp.responseText;
            }
        }
    xmlhttp.open("GET","ajaxForaneParish.php?val="+foraneid+"&t="+Math.random(),true);
    xmlhttp.send();
}


function printDiv(divID) // Used to print a div
{
    //Get the HTML of div
    var divElements = document.getElementById(divID).innerHTML;
    //Get the HTML of whole page
    var oldPage = document.body.innerHTML;
    //Reset the page's HTML with div's HTML only
    document.body.innerHTML = "<html><head><title></title></head><body>" + 
      divElements + "</body></html>";
    //Print Page
    window.print();
    //Restore orignal HTML
    document.body.innerHTML = oldPage;
}

function changePassword() // Used in change password
{
    if (document.getElementById("passwordType0").checked)
    {
        var newPassword = document.getElementById('newPassword').value;
        var rePassword = document.getElementById('rePassword').value;
        if(newPassword != rePassword)
        {
            alert("New passwords does not match");
            return false;
        } 
    }
    else if (document.getElementById("passwordType1").checked)
    {     
        
    }
    var result=confirm("Change Password");
    if (result==true)
        return true;
    else
        return false;
}

function isNumber(evt) // Used to check that user enters only digits
{
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function del() // Used for confirmation on delete
{
    var result=confirm("Are you sure you want to delete");
    return result;
}

function act() // Used for confirmation on activate
{
    var result=confirm("Are you sure you want to activate");
    return result;
}

function reject() // Used for confirmation on reject
{
    var result=confirm("Are you sure you want to reject");
    return result;
}

function approve() // Used for confirmation on approve
{
    var result=confirm("Are you sure you want to approve");
    return result;
}

function toggle(master) // Used in wherever we display a checkbox table
{
    var checked = master.checked;
//    var col = document.getElementsByTagName("INPUT");
    var col = document.getElementsByName("checkboxes[]");
    for (var i=0;i<col.length;i++)
        col[i].checked = checked;
}

function loadBlock() // Used in room details - admin
{
    var xmlhttp;
    var id=document.getElementById("hostel").value;  
    if (id != "all")
    {
        document.getElementById("blockLoading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("blockLoading").innerHTML="";
                    document.getElementById("block").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxBlock.php?val="+id+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("block").innerHTML="<option value=''>All</option>";
}

function loadBlockFloor() // Used in room details - admin
{
    var xmlhttp;
    var id=document.getElementById("block").value; 
    document.getElementById("floorLoading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
    if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    else // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("floorLoading").innerHTML="";
                document.getElementById("floor").innerHTML=xmlhttp.responseText;
            }
        }
    xmlhttp.open("GET","ajaxBlockFloor.php?val="+id+"&t="+Math.random(),true);
    xmlhttp.send();
}

function loadMessRate() // Used in application form to get mess rate - public
{
    var xmlhttp;
    var id=document.getElementById("messId").value;
    if (id != "")
    {
        document.getElementById("messRate").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("messRate").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxApplication.php?val="+id+"&from=m&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("messRate").innerHTML="";
}

function loadRoomCategoryRate() // Used in application form to get room rate - public
{
    var xmlhttp;
    var id=document.getElementById("roomCategoryId").value;
    if (id != "")
    {
        document.getElementById("roomCategoryRate").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("roomCategoryRate").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxApplication.php?val="+id+"&from=r&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("roomCategoryRate").innerHTML="";
}

function loadPaymentTypeMonths() // Used in application form to get months in payment type - public
{
    var xmlhttp;
    var id=document.getElementById("paymentTypeId").value;
    if (id != "")
    {
        document.getElementById("paymentTypeMonths").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("paymentTypeMonths").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxApplication.php?val="+id+"&from=p&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("paymentTypeMonths").innerHTML="";
}

function checkAvailability()
{
    var xmlhttp;
    var hostel=document.getElementById("hostel").value; 
    var block=document.getElementById("block").value; 
    var floor=document.getElementById("floor").value; 
    var roomCategory=document.getElementById("roomCategory").value;
    if (hostel != "" && block != "" && floor != "" && roomCategory != "")
    {
        document.getElementById("roomAvailibilty").innerHTML="<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("roomAvailibilty").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxRoomAvailability.php?b="+block+"&f="+floor+"&r="+roomCategory+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("roomAvailibilty").innerHTML="";   
}

function checkfile(sender)
{
    var validExts = new Array(".csv");
    var fileExt = sender.value;
    fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
    if (validExts.indexOf(fileExt) < 0)
    {
      alert("Invalid file selected. Only .csv file types are allowed.");
      return false;
    }
    else return true;
}

function loadbatch()
{
    var xmlhttp;
    var branches = document.getElementsByName('branch');
    var branch = "";
    for(var i = 0; i < branches.length; i++)
    {
        if(branches[i].checked)
            branch = branches[i].value;
    }
    document.getElementById("loadingBatch").innerHTML="<img src='images/loading.gif'/>";
    document.getElementById("studentResult").innerHTML="";
    if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    else // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("loadingBatch").innerHTML="";
                document.getElementById("studentResult").innerHTML="";
                document.getElementById("batch").innerHTML=xmlhttp.responseText;
            }
        }
    xmlhttp.open("GET","ajaxBatch.php?val="+branch+"&t="+Math.random(),true);
    xmlhttp.send();
}

function loadInmateResult() // Used in fine concession add - group
{
    var xmlhttp;
    var batch=document.getElementById("batch").value; 
    if (batch != "")
    {
        document.getElementById("studentResult").innerHTML="<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("studentResult").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxStudentResult.php?val="+batch+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("studentResult").innerHTML="";  
}

function loadBranch() // Used in search
{
    var xmlhttp;
    var department=document.getElementById("department").value; 
    var course=document.getElementById("course").value; 
    if (department != "" && course != "")
    {
        document.getElementById("branchLoading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("branchLoading").innerHTML="";
                    document.getElementById("branch").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxBranch.php?department="+department+"&course="+course+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("branch").innerHTML="<option value=''>All</option>";
}

function loadBatch() // Used in search
{
    var xmlhttp;
    var branch=document.getElementById("branch").value; 
    if (branch != "")
    {
        document.getElementById("batchLoading").innerHTML="&nbsp;&nbsp;&nbsp;<img src='images/loading.gif'/>";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("batchLoading").innerHTML="";
                    document.getElementById("batch").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxBatch.php?val="+branch+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("batch").innerHTML="<option value=''>All</option>";
}

function loadBatchClear()
{
    document.getElementById("batch").innerHTML="<option value=''>All</option>";
}

function performRoomShift() // Used in shift rooms
{
    var xmlhttp;
    var radios = document.getElementsByName('floor');
    var floor=0;
    for (var i = 0, length = radios.length; i < length; i++) 
    {
        if (radios[i].checked)
        {
            floor = radios[i].value;
            break;
        }
    }
    document.getElementById("processing").innerHTML="<img src='images/processing.gif'/><br/>Processing Request ...";
    if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    else // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("processing").innerHTML="";
                document.getElementById("processing").innerHTML=xmlhttp.responseText;
            }
        }
    xmlhttp.open("GET","ajaxRoomShift.php?floor="+floor+"&t="+Math.random(),true);
    xmlhttp.send();
}

function performFeeProcessing() // Used in fee processing
{
    var xmlhttp;
    var payDate = document.getElementById('payDate').value;
    if (payDate!="")
    {
        document.getElementById("processing").innerHTML="<img src='images/processing.gif'/><br/>Processing Request ...";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("processing").innerHTML="";
                    document.getElementById("processing").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxFeeProcessing.php?val="+payDate+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("processing").innerHTML="<font color='red'><b>Specify Date</b></font>";
}

function checkMonths()
{
    var month = document.getElementsByName("selectedMonths[]");
    var count = 0;
    for(var i = 0; i < month.length; i++)
    {
        if(month[i].checked)
            count = month[i].value;
    }
    if(count==0)
    {
        alert("No month selected");
        return false;
    }
    return true;
}

function checkFees()
{
    var xmlhttp;
    var leaveDate = document.getElementById('leaveDate').value;
    if (leaveDate!="")
    {
        document.getElementById("processing").innerHTML="<img src='images/processing.gif'/><br/>Processing Request ...";
        if (window.XMLHttpRequest) // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        else // code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp.onreadystatechange=function() {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    document.getElementById("processing").innerHTML="";
                    document.getElementById("processing").innerHTML=xmlhttp.responseText;
                }
            }
        xmlhttp.open("GET","ajaxVacateFeeProcessing.php?val="+leaveDate+"&t="+Math.random(),true);
        xmlhttp.send();
    }
    else
        document.getElementById("processing").innerHTML="<font color='red'><b>Specify Date</b></font>";
}