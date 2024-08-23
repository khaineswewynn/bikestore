$(document).on('click','.btnDelete',function(){
    let btnDelete=$(this);
    console.log(btnDelete);
    let tr=btnDelete.parent().parent();
    console.log(tr);
    let id=tr.attr('id');
    console.log(id)
    let status=confirm("Are you sure to delete??");
    if(status)
    {
        $.ajax(
            {
                url:'delete-brandajax.php',
                method:'post',
                data:{id:id},
                success:function(response)
                {
                   // alert(response);
                   let result=JSON.parse(response);
                  if(result.status=="true")
                        window.location.reload();
                    else
                        alert("You can't delete");
                }
            }          

        )
    }
})

$('.btnSearch').click(function()
{
    let data=$('.search').val();
    console.log(data)
    let tbody=$('#tbody');
    if(data.length>0)
    {
        $.ajax(
            {
                url:"search.php",
                method:'post',
                data:{value:data},
                success:function(response)
                {
                    tbody.children().remove();
                    tbody.append(response);
                }
            }
        )
    }
    else
    {
        alert("Please enter data to search")
    }
})
