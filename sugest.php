<?php 
if (isset($_GET['q'])) {
	if ($_GET['q'] !='') {
	?>
{
  "code": 200,
  "response": {
    "deals": [
      {
        "page_id": "folder-id",
        "short_title": "Title",
        "formatted_url": "deal-url",
        "partner": {
          "name": "lorem ipsum",
          "formatted_url": "partner-id"
        },
        "images": [
          {
            "image": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
          }
        ],
        "dealImage": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
      },{
        "page_id": "folder-id",
        "short_title": "Title",
        "formatted_url": "deal-url",
        "partner": {
          "name": "lorem ipsum",
          "formatted_url": "partner-id"
        },
        "images": [
          {
            "image": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
          }
        ],
        "dealImage": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
      }
    ]
  }
}
	<?
	}
} else{
	?>{
  "code": 200,
  "response": {
    "deals": [
      {
        "page_id": "folder-id",
        "short_title": "Title",
        "formatted_url": "deal-url",
        "partner": {
          "name": "lorem ipsum",
          "formatted_url": "partner-id"
        },
        "images": [
          {
            "image": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
          }
        ],
        "dealImage": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
      }]
    }
  }<?
}
?>
