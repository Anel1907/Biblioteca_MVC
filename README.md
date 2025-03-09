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

![Modelo MVC](https://www.freecodecamp.org/espanol/news/content/images/size/w1600/2021/06/MVC3.png)

