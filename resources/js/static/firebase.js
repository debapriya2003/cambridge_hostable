
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-app.js";
  import {getDatabase,ref,set,get,child}from "https://www.gstatic.com/firebasejs/10.9.0/firebase-Database.js";
  // TODO: Add SDKs for Firebase products that you want to use

  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyAL_Y6wVYIMens9Z0LBHNPwxTUzRFQ7kd0",
    authDomain: "contactcambridge-95366.firebaseapp.com",
    projectId: "contactcambridge-95366",
    storageBucket: "contactcambridge-95366.appspot.com",
    messagingSenderId: "722975386319",
    appId: "1:722975386319:web:bab15fc867ffcbe35d25ba"
  };

  const app = firebase.initializeApp(firebaseConfig);
  const db = firebase.database();
  
  // Form submission
  document.getElementById("contactForm").addEventListener('submit', function(e) {
      e.preventDefault(); // Prevent default form submission
  
      // Get form values
      const name = document.querySelector('input[name="name"]').value;
      const email = document.querySelector('input[name="email"]').value;
      const number = document.querySelector('input[name="number"]').value;
      const course = document.querySelector('select[name="course"]').value;
      const classSelected = document.querySelector('select[name="class"]').value;
      const message = document.querySelector('textarea[name="message"]').value;
  
      // Store form data in Firebase
      db.ref('contacts').push({
          name: name,
          email: email,
          number: number,
          course: course,
          class: classSelected,
          message: message
      }).then(() => {
          alert('Form submitted successfully!');
          document.getElementById("contactForm").reset(); // Reset form after submission
      }).catch(error => {
          console.error('Error submitting form:', error);
          alert('An error occurred while submitting the form. Please try again.');
      });
  });