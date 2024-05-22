
# FAQ Tecnológico

1. **Tecnologías utilizadas**
   - AWS EC2 para alojamiento del servidor web en PHP por medio de apache.
   - El servidor es linux.
   - PHP para el backend.
   - HTML, CSS y JavaScript para el frontend.
   - Se usa una única página web para la interacción con el usuario.
   - Se maneja la consulta por medio de parámetros URL.
2. Cómo se utiliza la solución
   - El usuario carga una imagen de una pieza de ajedrez en la página web.
   - La imagen es enviada al servidor para su procesamiento.
   - El servidor transforma la pieza a vector para enviarla al modelo de reconocimiento de imágenes previamente entrenado para identificar la pieza por medio de una API.
   - La API devuelve el nombre de la pieza.
   - La página recibe el nombre de la pieza y la usa como parámetro para mostrar la página debida.
3. Cómo se utilizan los datos
   - La imagen entonces es etiquetada y almacenada para mejorar el modelo.
4. Qué tipo de analítica utilizaron, modelos de estadística, ML, simulaciones, etc.
   - Se utilizó un modelo de Deep Learning para el reconocimiento de imágenes.
   - Las imágenes fueron recortadas y etiquetadas para el entrenamiento del modelo.
   - Se usó una arquitectura convolucional.
5. Inputs-Outputs
   - Inputs: Imagen de la pieza de ajedrez.
   - Outputs: Nombre de la pieza.
   - FrontEnd: descripción, valor, movimiento y sugerencias de jugadas.
6. Cómo se utilizan los outputs.
   - Los outputs son mostrados en la página web.
   - La descripción, valor, movimiento y sugerencias de jugadas son mostradas al usuario.
7. Cuánto costaría su solución a un año.
   - El costo de la solución dependerá del uso de la API de reconocimiento de imágenes.
   - El costo de alojamiento en AWS EC2.
   - El costo de mantenimiento y actualización del modelo de reconocimiento de imágenes.

[Volver](README.md)
