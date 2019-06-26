<?php 
if (isset($_GET['q'])) {
	if ($_GET['q'] !='') {
	?>
{
  "code": 200,
  "response": {
    "deals": [
      {
        "deal_id": "5c548cd1e4b09d529dfa6a22",
        "page_id": "sao-paulo-so",
        "short_title": "Rodízio de Pizza",
        "formatted_url": "rodizio-de-pizzamija",
        "partner": {
          "name": "Pizzaria Geovanele",
          "formatted_url": "pizzaria-geovanele",
          "canonical_url": ""
        },
        "images": [
          {
            "image": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
          }
        ],
        "page": [
          "sao-paulo-alphaville",
          "osasco",
          "sao-paulo-so",
          "barueri",
          "sao-paulo"
        ],
        "dealOriginalImage": "",
        "dealImage": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
      },
      {
        "deal_id": "57308711e4b05901a0ad6a1f",
        "page_id": "sao-paulo-so",
        "short_title": "Pizza Grande com opção de Pizza Doce",
        "formatted_url": "pizza-salgada-com-pizza-doce",
        "partner": {
          "name": "Mescla Pizza Bar",
          "formatted_url": "mescla-pizza-bar",
          "canonical_url": ""
        },
        "images": [
          {
            "image": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000p5mtDMAQ/5ad49d9ee4b033ed7286bdb8.png&w=64&h=41"
          }
        ],
        "page": [
          "sao-paulo-so",
          "sao-paulo"
        ],
        "dealOriginalImage": "",
        "dealImage": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0RG000000p5mtDMAQ/5ad49d9ee4b033ed7286bdb8.png&w=64&h=41"
      }
    ],
    "lastOffset": 3,
    "hasMore": true,
    "total": 111
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
        "deal_id": "5c548cd1e4b09d529dfa6a22",
        "page_id": "sao-paulo-so",
        "short_title": "Rodízio de Pizza",
        "formatted_url": "rodizio-de-pizzamija",
        "partner": {
          "name": "Pizzaria Geovanele",
          "formatted_url": "pizzaria-geovanele",
          "canonical_url": ""
        },
        "images": [
          {
            "image": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
          }
        ],
        "page": [
          "sao-paulo-alphaville",
          "osasco",
          "sao-paulo-so",
          "barueri",
          "sao-paulo"
        ],
        "dealOriginalImage": "",
        "dealImage": "https://img.stpu.com.br/?img=https://s3.amazonaws.com/pu-mgr/default/a0R0f000010xIRvEAM/5c58283ce4b0f1fdfd052fcf.jpg&w=64&h=41"
      }
    ],
    "lastOffset": 3,
    "hasMore": true,
    "total": 111
  }
}<?
}
?>
