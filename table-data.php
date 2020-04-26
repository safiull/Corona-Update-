<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="5">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<body>

    <h1 class="display-4 bg-dark text-info font-weight-bold text-center py-3">Develope by Safiull Alam</h1>

    <div class="row">
        <div class="col align-self-center text-center">
            <h3 class="bg-light py-4">COVID-19 CORONAVIRUS PANDEMIC</h3>
        </div>
    </div>

    <h1 class="display-4 text-center text-danger mt-5">Coronavirus Cases:</h1>
    <h2 class="text-center text-danger display-5">2,4354235</h2>

    <h4 class="text-center text-dark display-4 mt-4">Deaths:</h4>
    <h4 class="text-center text-dark display-4">1923421</h4>

    <h4 class="text-center text-success display-4 mt-4">Recovered:</h4>
    <h4 class="text-center text-success display-4 mb-5">75532</h4>

<?php

  $data = [
    ["Country"=>"USA","total cases"=>"886,709","new cases"=>"+267","total deaths"=>"50,243","new deaths"=>'+7',"total recovered"=>"85,922","Active cases"=>"750,544", "seriuos critical"=>"14,997","tot cases/1M pop"=>"2,679","Deaths/1M pop"=>152,"Total tests"=>"4,775,625", "tests/1M pop"=> "14,428"],
    
    ["Country"=>"Spain","total cases"=>"219,764","new cases"=>"+6,740","total deaths"=>"22,524","new deaths"=>'+7',"total recovered"=>"92,355","Active cases"=>"104,885", "seriuos critical"=>"7,705","tot cases/1M pop"=>"4,700","Deaths/1M pop"=>482,"Total tests"=>"930,230", "tests/1M pop"=> "19,896"],
    ["Country"=>"Italy","total cases"=>"189,973","new cases"=>"","total deaths"=>"25,549","new deaths"=>'',"total recovered"=>"57,576","Active cases"=>"104,885", "seriuos critical"=>"2,267","tot cases/1M pop"=>"3,142","Deaths/1M pop"=>423,"Total tests"=>"1,579,909", "tests/1M pop"=> "26,131"],
    ["Country"=>"France","total cases"=>"158,183","new cases"=>"","total deaths"=>"21,856","new deaths"=>'',"total recovered"=>"42,088","Active cases"=>"94,239", "seriuos critical"=>"5,053","tot cases/1M pop"=>"2,423","Deaths/1M pop"=>335,"Total tests"=>"463,662", "tests/1M pop"=> "7,103"],
    ["Country"=>"Germany","total cases"=>"153,307","new cases"=>"+178","total deaths"=>"5,575","new deaths"=>'',"total recovered"=>"106,800","Active cases"=>"40,932", "seriuos critical"=>"2,908","tot cases/1M pop"=>"1,830","Deaths/1M pop"=>67,"Total tests"=>"2,072,669", "tests/1M pop"=> "24,738"],
    ["Country"=>"UK","total cases"=>"138,078","new cases"=>"","total deaths"=>"18,738","new deaths"=>'',"total recovered"=>"N/A","Active cases"=>"118,996", "seriuos critical"=>"1,559","tot cases/1M pop"=>"2,034","Deaths/1M pop"=>276,"Total tests"=>"583,496", "tests/1M pop"=> "8,595"],
    ["Country"=>"Bangladesh","total cases"=>"4,689","new cases"=>"131","total deaths"=>"+4","new deaths"=>'112',"total recovered"=>"112","Active cases"=>"4,446", "seriuos critical"=>"1","tot cases/1M pop"=>"28","Deaths/1M pop"=>'0.8',"Total tests"=>"39,476", "tests/1M pop"=> "240"],
    ["Country"=>"India","total cases"=>"23,502","new cases"=>"+463","total deaths"=>"722","new deaths"=>'+1',"total recovered"=>"5,012","Active cases"=>"17,768", "seriuos critical"=>"","tot cases/1M pop"=>"17","Deaths/1M pop"=>'0.5',"Total tests"=>"541,789", "tests/1M pop"=> "393"],
    ["Country"=>"Pakistan","total cases"=>"11,155","new cases"=>"+98","total deaths"=>"237  ","new deaths"=>'+2',"total recovered"=>"2,527","Active cases"=>"8,391", "seriuos critical"=>"111","tot cases/1M pop"=>"50","Deaths/1M pop"=>'1',"Total tests"=>"131,365", "tests/1M pop"=> "595"],
    ["Country"=>"Sri Lanka","total cases"=>"373","new cases"=>"+5","total deaths"=>"7","new deaths"=>'',"total recovered"=>"107","Active cases"=>"259", "seriuos critical"=>"2","tot cases/1M pop"=>"17","Deaths/1M pop"=>'0.3',"Total tests"=>"13,142", "tests/1M pop"=> "614"],
    ["Country"=>"Saudi Arabia","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],

    ["Country"=>"Chaina","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Israel","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Japan","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Singapore","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Chile","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Mexico","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Ecuador","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"S. Korea","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Romania","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"UAE","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Qatar","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Indonesia","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Denmark","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Belarus","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Serbia","total cases"=>"14,882","new cases"=>"","total deaths"=>"193","new deaths"=>'',"total recovered"=>"1,925","Active cases"=>"11,884", "seriuos critical"=>"93","tot cases/1M pop"=>"400","Deaths/1M pop"=>'3',"Total tests"=>"200,000", "tests/1M pop"=> "5,745"],
    ["Country"=>"Total:","total cases"=>"2,745,536","new cases"=>"+22,492","total deaths"=>"191,791","new deaths"=>'+872',"total recovered"=>"755,529","Active cases"=>"1,798,216", "seriuos critical"=>"58,693 ","tot cases/1M pop"=>"352.2","Deaths/1M pop"=>'24.6',"Total tests"=>"", "tests/1M pop"=> ""]
];
    class tableCreation{
        public $table;
        public function tableData($array){
            $this->table = "<table id='myTable' class='display'>";
            /*The part of table heading*/
            $this->table.= "<thead>";
            $this->table.= "<tr>";
                foreach ($array[0] as $key=> $value) {
                    $this->table.= "<th>".ucfirst($key)."</th>";
                }
            $this->table.= "</tr>";
            $this->table.= "</thead>";
            /*The part of table data*/
            $this->table.="<tbody>";
            foreach ($array as $row){
               $this->table.="<tr>";
               foreach ($row as $key => $value) {
                  $this->table.="<td>$value</td>";
                }
                $this->table.="</tr>";
            }
            $this->table.="</tbody>";
            $this->table.="</table>";
            return $this->table;
        }  
    } 

$obj = new tableCreation();
echo $obj->tableData($data);
?>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>