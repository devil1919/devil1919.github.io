

var setval = firebase.database().ref().child("sensors");
setval.on('child_added',snap => {

   var humidity = snap.child("Crop").val();

   alert(humidity);



});



