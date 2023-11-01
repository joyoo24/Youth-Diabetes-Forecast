import numpy as np
from tensorflow.keras.models import load_model
import joblib
import sys

def predict_diabetes_risk(data):
    # Load the saved model and scaler
    model = load_model("model.keras")
    scaler = joblib.load("scaler.pkl")

    # Scale the data
    scaled_data = scaler.transform([data])

    # Predict the diabetes risk
    predicted_risk = model.predict(scaled_data)[0][0] * 100

    return predicted_risk

if __name__ == "__main__":
    # Get data from command line
    data = list(map(float, sys.argv[1:]))
    risk = predict_diabetes_risk(data)
    print(f"Predicted Diabetes Risk: {risk:.2f}%")
