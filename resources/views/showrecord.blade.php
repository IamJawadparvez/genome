<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<title>Genome Result</title>

	<style type="text/css">
		.row{
			margin: 0px;
		}
	</style>
</head>
<body>
<!-- Credit card form -->
<section>
	<div class="container mt-5">
	<div class="row">
    <div class="col-md-12 mb-4">
      <div class="card mb-4">
        <div class="card-header py-3">
          <h5 class="mb-0">Genome Record:</h5>
        </div>
        <div class="card-body">
          <div class="row">
          	<div class="col-md-6 mb-3">
          		<strong><label>Name:</label></strong> <span>{{ucwords(isset($result)?$result->name:'')}}</span>
          	</div>
          	<div class="col-md-6 mb-3">
          		<strong><label>Locus Type:</label></strong> <span>{{ucwords(isset($result)?$result->locus_type:'')}}</span>
          	</div>


          	<div class="col-md-6 mb-3">
          		<strong><label>HGNC ID:</label></strong> <span>{{ucwords(isset($result)?$result->hgnc_id:'')}}</span>
          	</div>
          	<div class="col-md-6 mb-3">
          		<strong><label>Alias Symbol:</label></strong> <span>{{ucwords(isset($result)?$result->alias_symbol:'')}}</span>
          	</div>

          	<div class="col-md-6 mb-3">
          		<strong><label>Symbol:</label></strong> <span>{{ucwords(isset($result)?$result->symbol:'')}}</span>
          	</div>

          	<div class="col-md-6 mb-3">
          		<strong><label>Version:</label></strong> <span>{{ucwords(isset($result)?$result->_version_:'')}}</span>
          	</div>


          	<div class="col-md-6 mb-3">
          		<strong><label>UUID:</label></strong> <span>{{ucwords(isset($result)?$result->uuid:'')}}</span>
          	</div>

          		<div class="col-md-6 mb-3">
          		<strong><label>Date Approved:</label></strong> <span>{{ucwords(isset($result)?$result->date_approved_reserved:'')}}</span>
          	</div>

          
          		<div class="col-md-6 mb-3">
          		<strong><label>Previous Name:</label></strong> <span>{{ucwords(isset($result)?$result->prev_name:'')}}</span>
          	</div>


          	<div class="col-md-6 mb-3">
          		<strong><label>Status:</label></strong> <span>{{ucwords(isset($result)?$result->status:'')}}</span>
          	</div>
          	
          </div>
        </div>
      </div>
    </div>

    
  </div>
	</div>
  
</section>
<!-- Credit card form -->
</body>
</html>