export GOOGLE_APPLICATION_CREDENTIALS=key-file-path

curl -X POST \
  -H "Authorization: Bearer $(gcloud auth application-default print-access-token)" \
  -H "Content-Type: application/json" \
  https://automl.googleapis.com/v1beta1/projects/crested-vortex-256214/locations/us-central1/models/TCN9076443801166344579:predict \
  -d '{
        "payload" : {
          "textSnippet": {
               "content": "YOUR TEXT HERE",
                "mime_type": "text/plain"
           },
        }
      }'