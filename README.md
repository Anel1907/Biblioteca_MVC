<h1> Arquitectura  MVC </h1>

<p>La arquitectura MVC (Modelo-Vista-Controlador) es un patrón de diseño que separa la lógica de la aplicación en tres componentes principales:

<ul>
   <li>Modelo (Model) → Gestiona los datos y la lógica de la aplicación.</li>
   <li>Vista (View) → Muestra la información al usuario.</li>
   <li>Controlador (Controller) → Maneja la interacción del usuario y actualiza el modelo o la vista según sea necesario.</li>
</ul>

<h2>Responsabilidades de cada capa </h2>

Modelo: 

<ul>
   <li>Gestiona los datos y la lógica de la aplicación.
   <li>Se comunica con la base de datos.</li>
   <li>No depende de la interfaz de usuario.</li>
</ul>

Vista: 

<ul>
   <li>Se encarga de la interfaz de usuario.</li>
   <li>Muestra los datos obtenidos del modelo.</li>
   <li>No tiene lógica de negocio.</li>
</ul>

Controlador: 

<ul>
    <li>Actúa como intermediario entre el Modelo y la Vista.</li>
    <li>Procesa las peticiones del usuario.</li>
    <li>Llama a los métodos del modelo y actualiza la vista.</li>
</ul>

![Modelo MVC](https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freecodecamp.org%2Fespanol%2Fnews%2Fel-modelo-de-arquitectura-view-controller-pattern%2F&psig=AOvVaw0v6aOTeqL_Ssidy3lHpi8o&ust=1741648122712000&source=images&cd=vfe&opi=89978449&ved=0CBAQjRxqFwoTCPDg_P6O_osDFQAAAAAdAAAAABAE)

