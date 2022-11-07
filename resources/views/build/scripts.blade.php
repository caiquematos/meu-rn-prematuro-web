 <!-- bootstrap js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
 </script>

 <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>

 <!-- Session functions AND Pnotify functions-->

 <!-- Verifica se há erros na sessão -->
 @if ($errors->any())
     @php
         $sessao_erros = '';
         foreach ($errors->all() as $error):
             $sessao_erros .= $error;
         endforeach;
     @endphp
     <script>
         //  new PNotify({
         //      title: 'Opa!',
         //      text: "{{ $sessao_erros }}",
         //      type: 'error',
         //      styling: 'bootstrap3'
         //  });
         console.log("Erro", "{{ $sessao_erros }}");
     </script>
 @endif

 <!-- Verifica se há mensagem de sucesso na sessão -->
 @if (session('success'))
     <script>
         // new PNotify({
         //     title: 'Sucesso',
         //     text: "{{ session('success') }}",
         //     type: 'success',
         //     styling: 'bootstrap3'
         // });
         console.log("Sucesso", "{{ session('success') }}");
     </script>
 @endif

 @if (isset($success))
     <script>
         console.log("há uma mensagem 'success' returned as var.", "{{ $success }}");
     </script>
 @endif

 <!-- /Session functions -->

 <script>
     // Import the functions you need from the SDKs you need
     const initializeApp = require("firebase/app");
     const getAnalytics = require("firebase/analytics");
     // TODO: Add SDKs for Firebase products that you want to use
     // https://firebase.google.com/docs/web/setup#available-libraries

     // Your web app's Firebase configuration
     // For Firebase JS SDK v7.20.0 and later, measurementId is optional
     const firebaseConfig = {
         apiKey: "AIzaSyB2ChYuGyZtR3ValdMqbKX01O3Da-A21n8",
         authDomain: "mue-rn-prematuro.firebaseapp.com",
         projectId: "mue-rn-prematuro",
         storageBucket: "mue-rn-prematuro.appspot.com",
         messagingSenderId: "375179697606",
         appId: "1:375179697606:web:dd7d74e4bf077ad9afe6c7",
         measurementId: "G-JWM8GR5SWL"
     };

     // Initialize Firebase
     const app = initializeApp(firebaseConfig);
     const analytics = getAnalytics(app);
 </script>
