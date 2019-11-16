@extends('index')
@section('content')
<div class="row">
    <div class="col-sm-3">
        <!-- Horizontal Form -->
        <div class="box p-spacing" style="border-radius:10px;border:none">
            <div class="box-header-me with-border ">
                <h4 style="margin:0">Rektorat</h4>
            </div>
            <div class="box-body-me pt-member">
                <div class="grid-member" id="level-1">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9">
        <!-- Horizontal Form -->
        <div class="box p-spacing" style="border-radius:10px;border:none">
            <div class="box-header-me with-border ">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 style="margin:0">Dekan</h4>
                    </div>
                    <div class="btn-group-horizontal" style="float: right">
                        <button onclick="fetchUser(2)" type="button" class="btn btn-info">Biro </button>
                        <button onclick="fetchUser(3)" type="button" class="btn btn-info">Dekan</button>
                        <button onclick="fetchUser(1)" type="button" class="btn btn-info">Lembaga</button>
                    </div>
                </div>
            </div>
            <div class="box-body-me pt-member">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="grid-member">
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="grid-member">
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="grid-member">
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-member">
                                <div class="col-sm-4">
                                    <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg"
                                        alt="User Avatar">
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-agenda">
                                        <p style="font-weight: bold">Rektor</p>
                                        <p>John Miachel</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(async function () {
            const user = await fetchUser(1)
            const user_1 = await fetchUser(2)
            let level_1 = ''

            user[0].data.forEach((user, idx) => {
                level_1 += `
                    <div class="row list-member">
                        <div class="col-sm-4">
                            <img class="img-circle-agenda" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                        </div>
                        <div class="col-sm-8">
                            <div class="text-agenda">
                                <p style="font-weight: bold">${user.email}</p>
                                <p>${user.fullname}</p>
                            </div>
                        </div>
                    </div>
                `
            })

            $('#level-1').append(level_1)
        });

            function fetchUser(level) {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        type: "GET",
                        url: 'http://ub.e-protokolri2.com/user?level=' + level,
                        headers: {
                            contentType: "application/json",
                            Authorization : `Bearer ${sessionStorage.getItem("token")}`,
                            dataType: 'json',
                        },
                        //   console.log(url)
                        success: function (data) {
                            console.log(data)
                            resolve(data);
                        },
                        error:function(error){
                            reject(error);
                        }
                    });
                })
            }
      </script>
@endsection
