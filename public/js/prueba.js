// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js";
import { getFirestore, doc, getDoc, onSnapshot, setDoc } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-firestore.js";

const firebaseConfig = {
    apiKey: "AIzaSyCLLlUhpU9_TBTYhZGCc13KqHuTv3pK4tc",
    authDomain: "awos-c083c.firebaseapp.com",
    projectId: "awos-c083c",
    storageBucket: "awos-c083c.firebasestorage.app",
    messagingSenderId: "8878122723",
    appId: "1:8878122723:web:8529cada78eef3691f47d6"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const firestore = getFirestore();

console.log("conectado a Firestore");

const invernadero = doc(firestore, 'invernaderos/invernadero1');
async function leeInvernadero() {
    const snapshot = await getDoc(invernadero);
    if ( snapshot.exists()) {
        const datos = snapshot.data();
        console.log('Los datos son: ' +JSON.stringify(datos));
        $('#temperatura').html('Temperatura: ' + datos.temperatura + 'C');
        $('#humedad').html('Humedad: ' + datos.humedad + '%');
        $('#riego').prop('checked',datos.riego?true:false);
    } else {
        console.log("No hay datos");
    }
}

function recibeCambios () {
    onSnapshot(invernadero, (docSnapshot) => {
        if( docSnapshot.exists()) {
            const datos = docSnapshot.data();
            console.log('Los datos NUEVOS son: ' + JSON.stringify(datos));
            $('#temperatura').html('Temperatura: ' + datos.temperatura + 'C');
            $('#humedad').html('Humedad: ' + datos.humedad + '%');
            $('#riego').prop('checked',datos.riego?true:false);
            
        }
    })
}

function updateInvernadero() {
    const datos = {
        riego: $('#riego').prop('checked')
    }
    setDoc(invernadero, datos, {merge: true});
}

//leeInvernadero();
recibeCambios();

window.actualiza = updateInvernadero