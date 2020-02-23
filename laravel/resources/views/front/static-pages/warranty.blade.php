
@section('stylesheet')
@endsection
@extends('front.master', ['body_class' => 'main-site left-sidebar'])
@section('title')
    Nitol | Dealer - Locator
@endsection
@section('body')
    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Warranty Policy</span></li>
            </ul>
        </div>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

        <div class="row" style="margin:auto;">
            <div style="font-weight: bold;color:red;">Warranty Policy</div>
            
            <h2>ATASHII LED TELEVISION</h2>
            
            <table>
                <tr>
                    <th>Item</th>
                    <th>Policy</th>
                    
                </tr>
                <tr> 
                    <td>Panel</td>
                    <td>2 yrs (Panel Replacement Guarantee, if not broken)</td>
                </tr>
                <tr>
                    <td>Spares</td>
                    <td>2 yrs</td>
                    
                </tr>
                <tr>
                    <td>Free Services</td>
                    <td>3 yrs</td>
                    
                </tr>
            </table>

            <h2>ATASHII/ BOSS -Refrigerator/ Freezer</h2>
            
            <table>
                <tr>
                    <th>Item</th>
                    <th>Policy</th>
                    
                </tr>
                <tr> 
                    <td>Compressor</td>
                    <td>8 yrs</td>
                </tr>
                <tr>
                    <td>Spares</td>
                    <td>2 yrs</td>
                    
                </tr>
                <tr>
                    <td>Free Services</td>
                    <td>3 yrs</td>
                    
                </tr>
            </table>

            <h2>ATASHII AIR CONDITIONER</h2>
            
            <table>
                <tr>
                    <th>Item</th>
                    <th>Policy</th>
                    
                </tr>
                <tr> 
                    <td>Compressor</td>
                    <td>3 yrs</td>
                </tr>
                <tr>
                    <td>Spares</td>
                    <td>1 yrs</td>
                    
                </tr>
                <tr>
                    <td>Free Services</td>
                    <td>1 yrs</td>
                    
                </tr>
            </table>

            <h2>ATASHI /BOSS MICROWAVE OVEN/MULTI COOKER/BLENDER/ Voltage Stabilizer </h2>
            
            <table>
                <tr>
                    <th>Item</th>
                    <th>Policy</th>
                    
                </tr>
                <tr>
                    <td>Spares</td>
                    <td>1 yrs</td>
                    
                </tr>
                <tr>
                    <td>Free Services</td>
                    <td>1 yrs</td>
                    
                </tr>
            </table>

            <h2>ATASHII Sound Bar  </h2>
            
            <table>
                <tr>
                    <th>Item</th>
                    <th>Policy</th>
                    
                </tr>
                <tr>
                    <td>Spares</td>
                    <td>6 Months</td>
                    
                </tr>
                <tr>
                    <td>Free Services</td>
                    <td>6 Months</td>
                    
                </tr>
            </table>
        </div>
    </div><!--end container-->
@endsection