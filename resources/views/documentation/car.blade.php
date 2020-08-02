@extends('layouts.app')

@section('content')
<main id="main">
    <section class="mt-5">
        <div class="container">
            <div class="card mb-3 shadow">
                <div class="card-header">
                    <strong>Base URL</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-11">
                            <input class="form-control" type="text" id="base_url" value="https://apicare.herokuapp.com/api/" disabled>
                        </div>
                        <div class="col-1">
                            <button onclick="copyFunction()" class="btn btn-primary btn-md">Copy</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header kepala-header">
                    Car
                </div>
                <div class="card-body">
                    <p class="url"><span class="http-get">GET</span> /car</p>
                    
                    <div class="container mb-2">
                        <p>Method ini dapat digunakan untuk mengambil semua data car yang ada.</p>
                    </div>

                    <p class="url"><span class="http-get">GET</span> /car/{id}</p>
                    <div class="container mb-2">
                        <p>Method ini dapat digunakan untuk mengambil data car berdasarkan id yang dimasukkan.</p>
                        
                        <span class="small">Path Parameter</span>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td width="30%">id</td>
                                    <td width="50%">integer</td>
                                    <td width="20%"><strong>required</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="url"><span class="http-post">POST</span> /car</p>
                    <div class="container mb-2">
                        <p>Method ini dapat digunakan untuk menambahkan data car.</p>
                       
                        <span class="small">Query String</span>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td width="30%">vehicle_registration_number</td>
                                    <td width="50%">string</td>
                                    <td width="20%"><strong>required</strong></td>
                                </tr>
                                <tr>
                                    <td>brand</td>
                                    <td>string</td>
                                    <td><strong>required</strong></td>
                                </tr>
                                <tr>
                                    <td>capacity</td>
                                    <td>integer</td>
                                    <td><strong>required</strong></td>
                                </tr>
                                <tr>
                                    <td>rental_cost</td>
                                    <td>string</td>
                                    <td><strong>required</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="url"><span class="http-put">PUT</span> /car/{id}</p>
                    <div class="container mb-2">
                        <p>Method ini dapat digunakan untuk mengupdate atau merubah data car berdasarkan id yang dimasukkan.</p>
                         
                        <span class="small">Path Parameter</span>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td width="30%">id</td>
                                    <td width="50%">integer</td>
                                    <td width="20%"><strong>required</strong></td>
                                </tr>
                            </tbody>
                        </table>

                        <span class="small">Query String</span>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td width="30%">vehicle_registration_number</td>
                                    <td width="50%">string</td>
                                    <td width="20%"><strong>required</strong></td>
                                </tr>
                                <tr>
                                    <td>brand</td>
                                    <td>string</td>
                                    <td><strong>required</strong></td>
                                </tr>
                                <tr>
                                    <td>capacity</td>
                                    <td>integer</td>
                                    <td><strong>required</strong></td>
                                </tr>
                                <tr>
                                    <td>rental_cost</td>
                                    <td>string</td>
                                    <td><strong>required</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p class="url"><span class="http-delete">DELETE</span> /car/{id}</p>
                    <div class="container mb-2">
                        <p>Method ini dapat digunakan untuk menghapus data car berdasarkan id yang dimasukkan.</p>
                        
                        <span class="small">Path Parameter</span>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td width="30%">id</td>
                                    <td width="50%">integer</td>
                                    <td width="20%"><strong>required</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection