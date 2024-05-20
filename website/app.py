from flask import Flask, request, jsonify
from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing import image
import numpy as np
import tensorflow as tf
from PIL import Image
import io

app = Flask(__name__)

# Load the model
model = load_model('chess_piece_classifier_01.keras')

# Define class labels in alphabetical order
class_labels = ["Bishop", "King", "Knight", "Pawn", "Queen", "Rook"]

@app.route('/predict', methods=['POST'])
def predict():
    # Get the image from the request
    file = request.files['file']
    if not file:
        return jsonify({'error': 'No file provided'}), 400

    # Read the image file into a BytesIO object
    img_bytes = io.BytesIO(file.read())

    # Load and preprocess the image
    img = image.load_img(img_bytes, target_size=(224, 224))
    img_array = image.img_to_array(img)
    img_array = np.expand_dims(img_array, axis=0)
    img_array = tf.keras.applications.vgg16.preprocess_input(img_array)

    # Make predictions
    predictions = model.predict(img_array)
    predicted_class_index = np.argmax(predictions, axis=1)[0]
    predicted_class = class_labels[predicted_class_index]

    # Return the predicted class
    return jsonify({'label': predicted_class})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
