
# Creación de Endpoint

2024-05-19 10:32:26

## Guía rápida para crear un endpoint en Amazon SageMaker

To call an Amazon SageMaker model endpoint using Amazon API Gateway and AWS Lambda, follow these steps:

1. **Set Up SageMaker Model:**
   - Train and deploy your model in Amazon SageMaker to create a model endpoint.

2. **Create a Lambda Function:**
   - Go to the AWS Lambda console and create a new function.
   - Write the function code to call the SageMaker endpoint for inference.

3. **Create an API Gateway:**
   - Navigate to the Amazon API Gateway console and create a new API.
   - Create a resource and method, integrating it with your Lambda function.

4. **Deploy the API:**
   - Deploy the API to a stage, which gives you an endpoint URL.

5. **Test the API:**
   - Use tools like Postman or cURL to send requests to your API Gateway endpoint and receive model predictions.

Here are the steps in detail:

### Step 1: Set Up SageMaker Model

1. **Train and Deploy Model:**
   - Train your model in SageMaker.
   - Deploy the model to get an endpoint. 

### Step 2: Create a Lambda Function

1. **Create Lambda Function:**
   - Open the AWS Lambda console.
   - Click "Create function" and choose "Author from scratch".
   - Configure function name, runtime (e.g., Python), and permissions.

2. **Write Lambda Function Code:**
   - Write code to invoke the SageMaker endpoint. Here is an example in Python:

     ```python
     import boto3
     import json

     def lambda_handler(event, context):
         runtime = boto3.client('runtime.sagemaker')
         payload = json.dumps(event['body'])

         response = runtime.invoke_endpoint(
             EndpointName='your-endpoint-name',
             ContentType='application/json',
             Body=payload
         )

         result = json.loads(response['Body'].read().decode())
         return {
             'statusCode': 200,
             'body': json.dumps(result)
         }
     ```

### Step 3: Create an API Gateway

1. **Create API:**
   - Open the Amazon API Gateway console.
   - Click "Create API" and choose "HTTP API".

2. **Create Resource and Method:**
   - Create a new resource (e.g., `/predict`).
   - Create a POST method and integrate it with your Lambda function.

### Step 4: Deploy the API

1. **Deploy API:**
   - Deploy the API to a stage (e.g., `dev`).

2. **Get Endpoint URL:**
   - Note the URL provided by API Gateway after deployment.

### Step 5: Test the API

1. **Send Requests:**
   - Use Postman or cURL to send HTTP POST requests to your API Gateway endpoint with the required input data.

By following these steps, you can set up and call an Amazon SageMaker model endpoint using Amazon API Gateway and AWS Lambda.

## Step 1: Set Up SageMaker Model - Detailed Instructions

1. **Create a SageMaker Notebook Instance:**
   - Go to the Amazon SageMaker console.
   - Click on "Notebook instances" in the left-hand menu.
   - Click "Create notebook instance."
   - Fill in the notebook instance name, instance type (e.g., `ml.t2.medium`), and other configurations.
   - Click "Create notebook instance."

2. **Open the Notebook Instance:**
   - Once the instance is in service, click "Open Jupyter."

3. **Prepare Your Data:**
   - Upload your dataset to the S3 bucket or directly to the notebook instance.

4. **Train the Model:**
   - Use the SageMaker SDK to train your model. Here is a basic example using the built-in XGBoost algorithm:

     ```python
     import sagemaker
     from sagemaker import get_execution_role
     from sagemaker.amazon.amazon_estimator import get_image_uri

     role = get_execution_role()
     session = sagemaker.Session()

     # Specify the container image for XGBoost
     container = get_image_uri(session.boto_region_name, 'xgboost')

     # Define the estimator
     xgb = sagemaker.estimator.Estimator(container,
                                         role,
                                         instance_count=1,
                                         instance_type='ml.m4.xlarge',
                                         output_path='s3://<your-bucket>/output',
                                         sagemaker_session=session)

     # Set hyperparameters
     xgb.set_hyperparameters(max_depth=5,
                             eta=0.2,
                             objective='binary:logistic',
                             num_round=100)

     # Prepare training data
     train_input = sagemaker.inputs.TrainingInput(s3_data='s3://<your-bucket>/train', content_type='csv')
     validation_input = sagemaker.inputs.TrainingInput(s3_data='s3://<your-bucket>/validation', content_type='csv')

     # Train the model
     xgb.fit({'train': train_input, 'validation': validation_input})
     ```

5. **Deploy the Model:**
   - Once the model is trained, deploy it to create an endpoint:

     ```python
     predictor = xgb.deploy(initial_instance_count=1, instance_type='ml.m4.xlarge')
     ```

6. **Test the Endpoint:**
   - After deployment, test the endpoint with sample data:

     ```python
     import numpy as np

     test_data = np.array([[1, 2, 3, 4, 5]])  # Replace with your test data
     prediction = predictor.predict(test_data)
     print(prediction)
     ```

These steps will help you set up and deploy a model in Amazon SageMaker. Let me know if you need more details or have any questions about specific parts of the process.