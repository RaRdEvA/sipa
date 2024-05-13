
# FAQ Usuarios

1. **¿Cómo funciona exactamente el Sistema Identificador de Piezas de Ajedrez (SIPA)?**
   - SIPA utiliza avanzadas tecnologías de reconocimiento de imágenes para identificar piezas de ajedrez a partir de fotos cargadas por los usuarios. Una vez identificada la pieza, el sistema proporciona información detallada sobre su nombre, valor, posibles movimientos y sugerencias de jugadas para principiantes.

2. **¿Qué necesito para utilizar el SIPA?**
   - Necesitas un dispositivo con acceso a internet y una cámara para tomar fotos de tus piezas de ajedrez. SIPA es accesible a través de nuestro sitio web y pronto estará disponible como aplicación móvil para iOS y Android.

3. **¿Es SIPA adecuado para jugadores de todos los niveles?**
   - Sí, aunque SIPA está diseñado principalmente para ayudar a los principiantes y a aquellos que están aprendiendo las bases del ajedrez, jugadores de todos los niveles pueden encontrar valor en las funciones avanzadas del sistema, como el análisis de movimientos y sugerencias estratégicas.

4. **¿Puede SIPA reconocer piezas de ajedrez de cualquier diseño?**
   - SIPA está entrenado para reconocer una amplia variedad de diseños y modelos de piezas de ajedrez, desde los más tradicionales hasta los más modernos. Continuamente estamos mejorando nuestra base de datos para aumentar la precisión del reconocimiento de piezas.

5. **¿Cómo asegura SIPA la privacidad y la seguridad de mis datos?**
   - La privacidad y seguridad de los usuarios son nuestras principales prioridades. SIPA utiliza protocolos de encriptación avanzados para asegurar que todas las imágenes y datos cargados se manejen de manera segura. No almacenamos imágenes más tiempo del necesario para la identificación.

6. **¿Cuánto cuesta usar SIPA?**
   - SIPA ofrece una versión gratuita que incluye funciones básicas de identificación y descripción de piezas. Para acceder a características avanzadas como análisis de movimientos y sugerencias de jugadas, ofrecemos un modelo de suscripción mensual. Detalles sobre precios y suscripciones están disponibles en nuestro sitio web.

7. **¿Qué tipo de apoyo o recursos ofrece SIPA para los principiantes?**
   - Además de la identificación y descripción de las piezas, ofrecemos tutoriales interactivos, guías de estrategia y un foro comunitario donde los usuarios pueden intercambiar consejos y aprender unos de otros. Estos recursos están diseñados para ayudar a los principiantes a mejorar rápidamente sus habilidades y confianza en el juego.

8. **¿En qué idiomas está disponible SIPA?**
   - Actualmente, SIPA está disponible en español. Estamos trabajando para expandir la disponibilidad a más idiomas en el futuro, para servir mejor a nuestra comunidad global de usuarios de ajedrez.

9. **¿Puedo contribuir al desarrollo de SIPA o sugerir mejoras?**
   - ¡Absolutamente! Valoramos enormemente el feedback de nuestra comunidad. Si tienes sugerencias o ideas para mejorar SIPA, por favor visita nuestro sitio web y completa el formulario de contacto. Estamos comprometidos con el desarrollo continuo del sistema basado en las necesidades y recomendaciones de nuestros usuarios.

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
