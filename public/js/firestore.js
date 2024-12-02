// Importa las funciones necesarias del SDK de Firebase
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js";
import { getFirestore, doc, getDoc, onSnapshot , setDoc} from "https://www.gstatic.com/firebasejs/9.1.1/firebase-firestore.js";

// Configuración de Firebase
const firebaseConfig = {
    apiKey: "AIzaSyAy3GBq1nPzDl2tKBKt4IbLvuGxS50xpCY",
    authDomain: "reynols-dbae9.firebaseapp.com",
    projectId: "reynols-dbae9",
    storageBucket: "reynols-dbae9.firebasestorage.app",
    messagingSenderId: "1064103061128",
    appId: "1:1064103061128:web:fa90bb183dcaa059be213d",
    measurementId: "G-R253D74E3V"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const firestore = getFirestore();

console.log("conectado a Firestore");

const personal = doc(firestore, 'personal/personal1');
async function leePersonal() {
    const snapshot = await getDoc(personal);
    if ( snapshot.exists()) {
        const datos = snapshot.data();
        console.log('Los datos son: ' +JSON.stringify(datos));
        $('#id').html('ID: ' + datos.id  );
        $('#hora').html('HORA: ' +  datos.hora.toDate() );
        $('#abrir').prop('checked',datos.abrir?true:false);
        
    } else {
        console.log("No hay datos");
    }
}

function recibeCambios () {
    onSnapshot(personal, (docSnapshot) => {
        if( docSnapshot.exists()) {
            const datos = docSnapshot.data();
            console.log('Los datos NUEVOS son: ' + JSON.stringify(datos));
            $('#id').html('ID: ' + datos.id );
            $('#hora').html('HORA: ' + datos.hora.toDate() );
            $('#abrir').prop('checked',datos.abrir?true:false);
        }
    });
}

function abrir() {
    const datos = {
        abrir: $('#abrir').prop('checked')
    }
    setDoc(personal, datos, {merge: true});
}

leePersonal();
recibeCambios();

window.abrir = abrir;



