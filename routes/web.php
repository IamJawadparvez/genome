<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('autosearch', [HomeController::class, 'autosearch'])->name('autosearch');
Route::get('advanced-search', [HomeController::class, 'advanced_search'])->name('advanced-search');


Route::get('/insert-json-file-to-database', function(){

    set_time_limit(0);

    $json = file_get_contents(public_path('genome.json'));
   
	$objs = json_decode($json,true);

    // echo '<pre>';
    // print_r($objs['response']['docs']);
    // echo '</pre>';

    //  exit();
    //dd($objs['response']['docs']); 
  
	foreach ($objs['response']['docs'] as $key => $obj)  {
        
       // dd($obj['alias_symbol']);
		//$obj = $obj;
       // dd($obj);
   
		//App\Models\GenesData::create($insertArr);

        $new= new App\Models\GenesData();
        $new->locus_type=isset($obj['locus_type'])?$obj['locus_type']:'';
        $new->name=isset($obj['name'])?$obj['name']:'';
        $new->hgnc_id=isset($obj['hgnc_id'])?$obj['hgnc_id']:'';
        $new->alias_symbol=isset($obj['alias_symbol'][0])?$obj['alias_symbol'][0]:'';
        $new->symbol=isset($obj['symbol'])?$obj['symbol']:'';
        $new->omim_id=isset($obj['omim_id'][0])?$obj['omim_id'][0]:'';
        $new->entrez_id=isset($obj['entrez_id'])?$obj['entrez_id']:'';
        $new->locus_group=isset($obj['locus_group'])?$obj['locus_group']:'';
        $new->location=isset($obj['location'])?$obj['location']:'';
        $new->_version_=isset($obj['_version_'])?$obj['_version_']:'';
        $new->location_sortable=isset($obj['location_sortable'])?$obj['location_sortable']:'';
        $new->status=isset($obj['status'])?$obj['status']:'';
        $new->uuid=isset($obj['uuid'])?$obj['uuid']:'';
        $new->pubmed_id=isset($obj['pubmed_id'][0])?$obj['pubmed_id'][0]:'';
        $new->date_modified=isset($obj['date_modified'])?$obj['date_modified']:'';
        $new->date_approved_reserved=isset($obj['date_approved_reserved'])?$obj['date_approved_reserved']:'';
        $new->date_name_changed=isset($obj['date_name_changed'])?$obj['date_name_changed']:'';
        $new->refseq_accession=isset($obj['refseq_accession'][0])?$obj['refseq_accession'][0]:'';
        $new->prev_symbol=isset($obj['prev_symbol'][0])?$obj['prev_symbol'][0]:'';
        $new->mgd_id=isset($obj['mgd_id'][0])?$obj['mgd_id'][0]:'';
        $new->ccds_id=isset($obj['ccds_id'][0])?$obj['ccds_id'][0]:'';
        $new->date_symbol_changed=isset($obj['date_symbol_changed'])?$obj['date_symbol_changed']:'';
        $new->prev_name=isset($obj['prev_name'][0])?$obj['prev_name'][0]:'';
        $new->ensembl_gene_id=isset($obj['ensembl_gene_id'])?$obj['ensembl_gene_id']:'';
        $new->vega_id=isset($obj['vega_id'])?$obj['vega_id']:'';
        $new->agr=isset($obj['agr'])?$obj['agr']:'';
        $new->ucsc_id=isset($obj['ucsc_id'])?$obj['ucsc_id']:'';
        $new->curator_notes=isset($obj['curator_notes'][0])?$obj['curator_notes'][0]:'';
        $new->uniprot_ids=isset($obj['uniprot_ids'][0])?$obj['uniprot_ids'][0]:'';
        $new->rgd_id=isset($obj['rgd_id'][0])?$obj['rgd_id'][0]:'';
        $new->gene_group=isset($obj['gene_group'][0])?$obj['gene_group'][0]:'';
        $new->gene_group_id=isset($obj['gene_group_id'][0])?$obj['gene_group_id'][0]:'';
        $new->iuphar=isset($obj['iuphar'])?$obj['iuphar']:'';
        $new->symbol_report_tag=isset($obj['symbol_report_tag'][0])?$obj['symbol_report_tag'][0]:'';
        $new->alias_name=isset($obj['alias_name'][0])?$obj['alias_name'][0]:'';
        $new->mane_select=isset($obj['mane_select'][0])?$obj['mane_select'][0]:'';
        $new->ena=isset($obj['ena'][0])?$obj['ena'][0]:'';
        $new->lsdb=isset($obj['lsdb'][0])?$obj['lsdb'][0]:'';
        $new->enzyme_id=isset($obj['enzyme_id'][0])?$obj['enzyme_id'][0]:'';
        $new->imgt=isset($obj['imgt'])?$obj['imgt']:'';
        $new->orphanet=isset($obj['orphanet'])?$obj['orphanet']:'';
        $new->gencc=isset($obj['gencc'])?$obj['gencc']:'';
        $new->lncipedia=isset($obj['lncipedia'])?$obj['lncipedia']:'';
        $new->lncrnadb=isset($obj['lncrnadb'])?$obj['lncrnadb']:'';
        $new->save();
	}
	dd("Finished adding data in table");
});
