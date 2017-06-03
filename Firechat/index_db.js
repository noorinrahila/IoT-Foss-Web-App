
	
	var rootRef = firebase.database().ref().child("messages");
	rootRef.on("child_added",snap => {
            //var message = snap.child("Message").val();
	
	//$("#table_body").append("<tr><td>"+ message +"</td><td><button>Send Message</button></td></tr>");
    });

	
	
	