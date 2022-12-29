const firebaseConfig = {
    apiKey: "AIzaSyBZPqY1GSybNMPaCJ1NtuGvdP1Q7f5bdUE",
    authDomain: "form-a5dd7.firebaseapp.com",
    databaseURL: "https://form-a5dd7-default-rtdb.firebaseio.com",
    projectId: "form-a5dd7",
    storageBucket: "form-a5dd7.appspot.com",
    messagingSenderId: "699283542072",
    appId: "1:699283542072:web:dc5f37a597bdd1f79d96cd"
  };

  firebaseConfig.initializeApp(firebaseConfig);

  const formDB=firebaseConfig.database().ref('form')
  document.getElementById('form').addEventListener('submit',submitform)
  function submitform(e){
    e.preventDefault();

    var firstname=getElementVal('firstName');
    var lastname=getElementVal('lastName');
    var snumber=getElementVal('snumber');
    var aadharnumber=getElementVal('aadharnumber');
    var email=getElementVal('email');
    var FatherName=getElementVal('FatherName');
    var MotherName=getElementVal('MotherName');
    var FatherNumber=getElementVal('FatherNumber');
    var MotherNumber=getElementVal('MotherNumber');
    var Address=getElementVal('Address');
    var gender=getElementVal('gender');
    var DOB=getElementVal('DOB');
    var EmcetRank=getElementVal('EmcetRank');
    var JEERank=getElementVal('JEERank');
    var _10Board=getElementVal('_10Board');
    var _10Percentage=getElementVal('_10Percentage');
    var _12Board=getElementVal('_12Board');
    var _12Percentage=getElementVal('_12Percentage');
    var Course=getElementVal('Course');
    console.log(firstname,lastname,snumber,aadharnumber,email,FatherName,MotherName,FatherNumber,MotherNumber,Address,male,female,others,DOB,EmcetRank,JEERank,_10Board,_10Percentage,_12Board,_12Percentage,Course);

  }

  const getElementVal =(id)=>{
    return document.getElementById(id).value
  }