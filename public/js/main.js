

function onSend(){
    var Name=document.getElementById('Name').value;
    var Roll=document.getElementById('Roll').value;
    var Class=document.getElementById('Class').value;
 var url='/insertData';
 var data={Name:Name,Roll:Roll,Class:Class};
    axios.post(url,data)
    .then(function (response){
        alert(response.data);
    })
    .catch(function (error){
        alert('error');
    });

}

function onDelete(){
   var id=document .getElementById('id').value;
var url='/deleteData';
var data={id:id};

   axios.post(url,data)
   .then(function (response){
       alert(response.data);
   })
   .catch(function (error){
       alert('error');
   });
}

function onUpdate(){
    var id=document .getElementById('id').value;
    var Name=document.getElementById('Name').value;
    var Roll=document.getElementById('Roll').value;
    var Class=document.getElementById('Class').value;

    var url='/updateData';
var data={id:id,Name:Name,Roll:Roll,Class:Class};

   axios.post(url,data)
   .then(function (response){
       alert(response.data);
   })
   .catch(function (error){
       alert('error');
   });

}