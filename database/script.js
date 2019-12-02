$(document).ready(function(){


    $('#insertuser').click(function(){
    var uname = $('#uname').val();
    var phone = $('#phone').val();
    var pass = $('#pass').val();
    var conpass = $('#conpass').val();
    var address = $('#address').val();

    var dob = $('#dob').val();

    //alert(uname);
    if (conpass == pass) {


        $.ajax
        ({

            url: '../database/userinsert.php',
            type: 'post',
            dataType: 'json',
            data: {
                uname: uname,
                pass: pass,
                phone: phone,
                address: address,
                dob: dob,

            },
            success: function (result) {
                if (result) {
                    alert('success');
                }
                else {
                    alert('failed to insert data');
                }
            }
        })
    }
    else {
        alert('Password do not match');

    }
})
//-------------------------------------------------------------------------------------



    $('#getfee').click(function(){


        var branch = $('#branch').val();

        var year = $('#year').val();

        var quota = $('#quota').val();

        var type = $('#type').val();
        var bus = $('#bus').val();
        var source = $('#source').val();

        //alert(quota);
        if (branch && year && quota && type && bus && source)
        {
            alert("success");
            window.location.href='feeform.php';

        }
        else {
            alert('Fill Out all Mandatory Details');
            window.location.reload();

        }
    })
//----------------------------------------------------------------------------------


    $('#admit').click(function(){
        var uname=document.getElementById("uname").innerText;
        var branch =document.getElementById("branch").innerText;
        branch=branch.split(':');
        branch=branch[1];


        var year = document.getElementById("year").innerText;
        year=year.split(':');
        year=year[1];

        var dob = document.getElementById("dob").innerText;
        dob=dob.split(':');
        dob=dob[1];


        var name=document.getElementById("name").innerText;
        name=name.split(':');
        name=name[1].split(' ');
        if(name.length>=3)
        {
        var fname=name[0];
        var mname=name[1];
        var lname=name[2];
        }
        else
        {
            var fname=name[0];
            var mname="";
            var lname=name[1];
        }

        var semail =document.getElementById("semail").innerText;
        var admission =document.getElementById("admission").innerText;
        var exam =document.getElementById("exam").innerText;
        var feast = document.getElementById("feast").innerText;
        var stationary = document.getElementById("stationary").innerText;
        var softskill = document.getElementById("softskill").innerText;
        var hostel =document.getElementById("hostel").innerText;
        var bus = document.getElementById("bus").innerText;

        var total = document.getElementById("total").innerText;
        var paid = document.getElementById("paid").innerText;
        var balance = document.getElementById("balance").innerText;
        var source = document.getElementById("source").innerText;
       // alert(name.length);

       // alert(source);
       //
       //  alert(admission);
       //  alert(exam);
       //  alert(feast);
       //  alert(stationary);
       //  alert(softskill);
       //  alert(hostel);
       //  alert(total);
       //  alert(paid);
       //  alert(balance);
       //  alert(bus);
       //  alert(branch);
       //
       //  alert(year);
        //alert(dob);
       // alert(fname);
        //alert(mname);
       // alert(lname);

        var quota;
        if(admission>30000)
            quota= 'Management';
        else
            quota='SNQ';
        //alert(quota);



        var type;
        if(hostel !=0)
             type="Hostel";
        else
             type="Day Scholar";
        //alert(type);




        $.ajax({
            url:'../database/insertstudent.php',
            type: 'post',
            dataType: 'json',
            data:{
                fname:fname,
                mname:mname,
                lname:lname,
                uname:uname,
                branch:branch,
                semail:semail,
                year:year,
                quota:quota,
                type:type,
                bus:bus,
                source:source,
                admission:admission,
                exam:exam,
                feast:feast,
                stationary:stationary,
                softskill:softskill,
                hostel:hostel,
                total:total,
                paid:paid,
                balance:balance,
                dob:dob
            },
            success:function(result)
            {
                if(result)
                {
                    alert('Registered');
                }
                else{
                    alert('Failed to Register');
                }


            }
        })


    })


//-----------------------------------------------------------------------------------

//     $('#insertbranch').click(function(){
//         var bname = $('#bname').val();
//
//         var bcode = $('#bcode').val();
//
//         var hod = $('#bhod').val();
//
// // alert(bname);
// // alert(bcode);
// // alert(hod);
//
//
//             $.ajax
//             ({
//
//                 url: 'database/branchinsert.php',
//                 type: 'post',
//                 dataType: 'json',
//                 data: {
//                     bname: bname,
//                     bcode: bcode,
//                     hod: hod
//
//                 },
//                 success: function (result) {
//                     if (result) {
//                         alert('success');
//                     }
//                     else {
//                         alert('failed to insert data');
//                     }
//                 }
//             })
//
//     })
//
//


    //---------------------------------------------------------------------------------

    $(".editbranch").click(function(){
        var name=$(this).attr("name");
        if(name=='update')
        {
            var branchdelete=$(this).attr("vals");
            //alert(branchdelete);
            var bname='';
            var bcode='';
            var hod='';
            $(this).closest('tr').find('#bname').each(function()
            {
                bname=$(this).val();
            })
             $(this).closest('tr').find('#bcode').each(function()
            {
                bcode=$(this).val();
            })
             $(this).closest('tr').find('#hod').each(function()
            {
                hod=$(this).val();
            })

            $.ajax({
                url:'database/updatebranch.php',
                type: 'post',
                dataType: 'json',
                data:{
                    id:branchdelete,
                    bname:bname,
                    bcode:bcode,
                    hod:hod
                },
                success:function(result)
                {
                    if(result)
                    {
                        alert('updated');
                        location.reload();

                    }
                    else{
                        alert('Failed to update Data');
                    }


                }
            })
        }


        else if(name=='delete')
        {
            var branchdelete=$(this).attr("vals");

            $.ajax({
                url:'database/deletebranch.php',
                type: 'post',
                dataType: 'json',
                data:{
                    id:branchdelete,
                },
                success:function(result)
                {
                    if(result)
                    {
                        alert('Deleted');
                        location.reload();

                    }
                    else{
                        alert('Failed to Delete Data');
                    }


                }
            })
        }


    })



    //------------------------------------------------------------------------------------

    $(".note").click(function() {
        var name=$(this).attr("name");
        if(name=='note')
        {
            var noteid = $(this).attr("vals");
            //alert(noteid);

            $('#formnotes').attr('action','database/opennote.php');

            $.ajax
            ({

                url : 'database/opennote.php',
                type : 'post',
                dataType : 'json',
                data : {
                    noteid:noteid,
                },
                success: function(result)
                {
                    if(result)
                    {
                        alert('success');


                    }
                    else{
                        alert('failed to insert data');
                    }
                }
            })

        }
    })

  //------------------------------------------------------------

     $(".deletenotes").click(function() {
         var noteid='';
         $(this).closest('tr').find('#deletenotes').each(function()
         {
              noteid=$(this).val();
         })
            //alert(noteid);

            $.ajax
            ({

                url : 'database/deletenotes.php',
                type : 'post',
                dataType : 'json',
                data : {
                    noteid:noteid,
                },
                success: function(result)
                {
                    if(result)
                    {
                        alert('success');


                    }
                    else{
                        alert('failed to delete data');
                    }
                }
            })


    })

    //----------------------------------------------------------------------------------------


    // $(".addnote").click(function() {
    //
    //   var name=document.getElementById('file1');
    //   var name=name.files.item(0).name;
    //   alert (name);
    //
    //
    //
    // })

    //--------------------------------------------------------------------------------------

    $(".pay").click(function(){
        var name=$(this).attr("name");
        if(name=='pay') {
            var feeid = $(this).attr("vals");
            //alert(feeid);
            $(this).closest('tr').find('#total').each(function()
            {
                total=$(this).val();
            })

            $.ajax({
                url:'database/payfee.php',
                type: 'post',
                dataType: 'json',
                data:{
                    id:feeid,
                    total:total
                },
                success:function(result)
                {
                    if(result)
                    {
                        alert('Payment Successfull');
                        location.reload();

                    }
                    else{
                        alert('Failed to Pay');
                    }


                }
            })

        }
    })


    //-----------------------------------------------------------------------------------------

    $(".editstudent").click(function(){
        var name=$(this).attr("name");
        if(name=='update')
        {
            var studentid=$(this).attr("vals");
           // alert(studentid);
            var name='';
            var fname='';
            var mname='';
            var lname='';
            var email='';
            var dob='';
            var uname='';
            $(this).closest('tr').find('#name').each(function()
            {
                name=$(this).val();
                name=name.split(' ');
                if(name.length>=3)
                {
                    fname=name[0];
                    mname=name[1];
                    lname=name[2];
                }
                else
                {
                    fname=name[0];
                    mname="";
                    lname=name[1];
                }
            })
            $(this).closest('tr').find('#email').each(function()
            {
                email=$(this).val();
            })
            $(this).closest('tr').find('#dob').each(function()
            {
                dob=$(this).val();
            })
            $(this).closest('tr').find('#uname').each(function()
            {
                uname=$(this).val();
            })

             // alert(studentid);
            // alert(email);
            // alert(dob);
            // alert(uname);
            // alert(fname);
            // alert(mname);
            // alert(lname);

            $.ajax({
                url:'database/updatestudent.php',
                type: 'post',
                dataType: 'json',
                data:{
                    id:studentid,
                    fname:fname,
                    mname:mname,
                    lname:lname,
                    email:email,
                    dob:dob,
                    uname:uname
                },
                success:function(result)
                {
                    if(result)
                    {
                        alert('updated');
                        location.reload();

                    }
                    else{
                        alert('Failed to update Data');
                    }


                }
            })
        }


        else if(name=='delete')
        {
            var studentid=$(this).attr("vals");

            $.ajax({
                url:'database/deletestudent.php',
                type: 'post',
                dataType: 'json',
                data:{
                    id:studentid
                },
                success:function(result)
                {
                    if(result)
                    {
                        alert('Deleted');
                        location.reload();

                    }
                    else{
                        alert('Failed to Delete Data');
                    }


                }
            })


        }


    })
})




