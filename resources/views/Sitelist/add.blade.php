<div class="modal fade" id="add-sitelist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sitelist.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="batch">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="batch_id">Batch</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="batch_id" name="batch">
                                        <option value="KKST 2022">KKST 2022</option>
                                        <option value="Site Recovery">Site Recovery</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('batch')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="program_hq">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="program_hq_id">Program HQ</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="program_hq_id" name="program_hq">
                                        <option value="New Infra Batch#1 - 2022">New Infra Batch#1 - 2022</option>
                                        <option value="Order 2021-Combat Permanenization">Order 2021-Combat
                                            Permanenization</option>
                                        <option value="Order 2021-Desa Non 3T">Order 2021-Desa Non 3T</option>
                                        <option value="Order 2021-Part 249">Order 2021-Part 249</option>
                                        <option value="Order 2021-Part of 1875">Order 2021-Part of 1875</option>
                                        <option value="Order 2021-Part of 700">Order 2021-Part of 700</option>
                                        <option value="Special VIP - Permanenisasi Combat">Special VIP - Permanenisasi
                                            Combat</option>
                                        <option value="Special Program - WIN JAVA">Special Program - WIN JAVA</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('program_hq')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="siteidplan">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="siteidplan_id">Site ID Plan</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="siteidplan_id" name="site_id_plan_indeks">
                                        <option disabled selected>-</option>
                                        @foreach ($siteid as $st)
                                            <option value="{{ $st->name }}">
                                                {{ $st->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('site_id_plan_indeks')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Site ID Plan</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" class="form-control" name="site_id_plan_number"
                                        placeholder="Site ID Plan">
                                    <div class="text-danger">
                                        @error('site_id_plan_number')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row align-items-center">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label">Site Name Plan</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <input type="text" class="form-control" name="site_name_plan"
                                        placeholder="Site Name Plan Number" style="text-transform: capitalize">
                                    <div class="text-danger">
                                        @error('site_name_plan')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="siteidactual">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="siteidactual_id">Site ID Actual</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="siteidactual_id" name="site_id_actual_indeks">
                                        <option disabled selected>-</option>
                                        @foreach ($siteid as $site)
                                            <option value="{{ $site->name }}">{{ $site->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('site_id_actual_indeks')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Site ID Actual</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" class="form-control" name="site_id_actual_number"
                                        placeholder="Site ID Actual">
                                    <div class="text-danger">
                                        @error('site_id_actual_number')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row align-items-center">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label">Site Name Actual</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <input type="text" class="form-control" name="site_name_actual"
                                        placeholder="Site Name Actual Number" style="text-transform: capitalize">
                                    <div class="text-danger">
                                        @error('site_name_actual')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Longitude</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" id="longitude" class="form-control" name="longitude"
                                        placeholder="Longitude">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Latitude</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" id="latitude" class="form-control" name="lotitude"
                                        placeholder="Latitude">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row align-items-center">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label">Alamat</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <input type="text" id="alamat_site" class="form-control" name="alamat_site"
                                        placeholder="Alamat Site">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="city">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="city_id">City</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="city_id" name="city">
                                        <option disabled selected>-</option>
                                        {{-- @foreach ($city as $city)
                                            <option value="{{ $city->city_id }}">{{ $city->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    <div class="text-danger">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="do">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="do_id">Distrik Operation</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="do_id" name="do">
                                        <option disabled selected>-</option>
                                        {{-- @foreach ($distrik as $do)
                                            <option value="{{ $do->id }}">{{ $do->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    <div class="text-danger">
                                        @error('do')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="ns">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="ns_id">Network Service</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="ns_id" name="ns">
                                        <option disabled selected>-</option>
                                        {{-- @foreach ($networkservice as $ns)
                                            <option value="{{ $ns->id }}">{{ $ns->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    <div class="text-danger">
                                        @error('ns')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="branch">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="branch_id">Branch</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="branch_id" name="branch">
                                        <option disabled selected>-</option>
                                        {{-- @foreach ($branch as $br)
                                            <option value="{{ $br->id }}">
                                                {{ $br->name }}</option>
                                        @endforeach --}}
                                    </select>
                                    <div class="text-danger">
                                        @error('branch')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="tower_provider">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="tower_provider_id">Tower Provider</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="tower_provider_id" name="tower_provider">
                                        <option disabled selected>-</option>
                                        @foreach ($towerprovider as $tower)
                                            <option value="{{ $tower->name }}">{{ $tower->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('tower_provider')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="infratype">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="infratype_id">Infra Type</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="infratype_id" name="infra_type">
                                        <option disabled selected>-</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('infra_type')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row align-items-center" id="simple_progress">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label" for="simple_progress_id">Simple Progress</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <select class="form-select" id="simple_progress_id" name="simple_progress">
                                        <option disabled selected>-</option>
                                        @foreach ($simpleprogress as $sp)
                                            <option value="{{ $sp->name }}">{{ $sp->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('simple_progress')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="progress_hq">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="progress_hq_id">Progress HQ</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="progress_hq_id" name="progress_hq">
                                        <option disabled selected>-</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('progress_hq')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="progress_regional">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="progress_regional_id">Progress Regional</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="progress_regional_id" name="progress_regional">
                                        <option disabled selected>-</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('progress_regional')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">KKST Date</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="date" class="form-control" name="kkst_date">
                                    <div class="text-danger">
                                        @error('kkst_date')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="trm_type">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="trm_type_id">TRM TYPE</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="trm_type_id" name="trm_type">
                                        <option value="FO TELKOM">FO TELKOM</option>
                                        <option value="RTN REDEPLOY">RTN REDEPLOY</option>
                                        <option value="DROP">DROP</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('trm_type')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row align-items-center" id="capex_eqp">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label" for="capex_eqp_id">CAPEX EQP</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <select class="form-select" id="capex_eqp_id" name="capex_eqp">
                                        <option value="Capex Desa NON 3T">Capex Desa NON 3T</option>
                                        <option
                                            value="CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA TIMUR 2021">
                                            CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA TIMUR
                                            2021</option>
                                        <option value="CP 2022 - Win Java">CP 2022 - Win Java</option>
                                        <option value="CP 2022 - Settlement 5">CP 2022 - Settlement 5</option>
                                        <option value="CP 2 2021 Uplift">CP 2 2021 Uplift</option>
                                        <option value="CP 2 2021 Uplift Batch 2">CP 2 2021 Uplift Batch 2</option>
                                        <option value="CP 2 2022">CP 2 2022</option>
                                        <option value="CP1A 2021 Settlement 3">CP1A 2021 Settlement 3</option>
                                        <option value="CP1B 2021 New Infra Cherry Pick">CP1B 2021 New Infra Cherry Pick
                                        </option>
                                        <option value="CP1B 2021 Settlement 7">CP1B 2021 Settlement 7</option>
                                        <option value="Support New Infra Part 1875 non Collo">Support New Infra Part
                                            1875 non Collo</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('capex_eqp')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row align-items-center" id="capex_trm">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label" for="capex_trm_id">CAPEX TRM</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <select class="form-select" id="capex_trm_id" name="capex_trm">
                                        <option value="BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022">
                                            BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022</option>
                                        <option value="Metro-E">Metro-E</option>
                                        <option value="Not Yet Presales / PO">Not Yet Presales / PO</option>
                                        <option value="Plan Presales Support New Infra Part 400 B2S 2022">Plan Presales
                                            Support New Infra Part 400 B2S 2022</option>
                                        <option value="Support New Infra Compat Permanisasi">Support New Infra Compat
                                            Permanisasi</option>
                                        <option value="Support New Infra Part 1875 non Collo">Support New Infra Part
                                            1875 non Collo</option>
                                        <option value="Support Settlemant 5 2021">Support Settlemant 5 2021</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('capex_trm')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" style="width: 100%">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!--========= INFRA TYPE ==========-->
{{-- <script>
    $('#tower_provider_id').change(function() {
        var tp_id = $(this).val();
        if (tp_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/infratype') }}?tp_id=" + tp_id,
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#infratype_id").empty();
                        $("#infratype_id").append('<option>Select</option>');
                        $.each(res, function(key) {
                            $("#infratype_id").append('<option value="' + res[key].id +
                                '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#infratype_id").empty();
                    }
                }
            });
        } else {
            $("#infratype_id").empty();
        }
    });
</script> --}}
<script>
    $('#tower_provider_id').change(function() {
        $('#infratype_id').val("");
        if ($('#tower_provider_id option:selected').text() == "Telkom Infra") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="Combat Relocation">Combat Relocation</option>');
        } else if ($('#tower_provider_id option:selected').text() == "PTI") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "LSP") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "CMI") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "ACOM") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "STP") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "TBG") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "DMT") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "ABL") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "EBT") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "GMT") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        } else if ($('#tower_provider_id option:selected').text() == "IBS") {
            $('#infratype_id').empty();
            $('#infratype_id').append('<option hidden>-</option>');
            $('#infratype_id').html(
                '<option hidden>-</option><option value="B2S">B2S</option><option value="Collo TP">Collo TP</option><option value="Mini Macro">Mini Macro</option>'
            );
        }
    });
</script>
<!--========= TARGET BULAN BERJALAN ==========-->
{{-- <script>
    const target = {
        'ON AIR': {
            update: ['DONE OA(APRIL)']
        },
        'RFI': {
            update: ['OPTIMIS', 'PESIMIS']
        },
        'NY RFI': {
            update: ['OPTIMIS', 'PESIMIS']
        },
        'DROP/HOLD': {
            update: ['DROP']
        },
    }

    function updateTargetBulanBerjalan() {
        targetbulanberjalan_id.innerHTML = "";
        target[simple_progress_id.value].update.forEach(e => targetbulanberjalan_id.innerHTML +=
            `<option value=${e}">${e}</option>`)
    }
    simple_progress_id.addEventListener('change', updateTargetBulanBerjalan);
    updateTargetBulanBerjalan();
</script> --}}
<!--========= ISSUE ==========-->
{{-- <script>
    const issueNewInfra = {
        'ON AIR': {
            update: ['NO ISSUE(Sudah OA)']
        },
        'RFI': {
            update: ['ON PLAN']
        },
        'NY RFI': {
            update: ['Belum RFI']
        },
        'DROP/HOLD': {
            update: ['DROP']
        },
    }

    function updateIssue() {
        issue_id.innerHTML = "";
        issueNewInfra[simple_progress_id.value].update.forEach(e => issue_id.innerHTML +=
            `<option value=${e}">${e}</option>`)
    }
    simple_progress_id.addEventListener('change', updateIssue);
    updateIssue();
</script> --}}
<!--========= MONTH OA ==========-->
{{-- <script>
    const monthOA = {
        'ON AIR': {
            update: ['January', 'February', 'March', 'April', 'May', 'June', 'July']
        },
        'RFI': {
            update: ['January', 'February', 'March', 'April', 'May', 'June', 'July']
        },
        'NY RFI': {
            update: ['January', 'February', 'March', 'April', 'May', 'June', 'July']
        },
        'DROP/HOLD': {
            update: ['DROP']
        },
    }

    function updateMonthOA() {
        month_oa_id.innerHTML = "";
        monthOA[simple_progress_id.value].update.forEach(e => month_oa_id.innerHTML +=
            `<option value=${e}">${e}</option>`)
    }
    simple_progress_id.addEventListener('change', updateMonthOA);
    updateMonthOA();
</script> --}}
<!--========= PROGRES HQ, PROGRES REGION ==========-->
{{-- <script>
    $('#simple_progress_id').change(function() {
        var simple_progress_id = $(this).val();
        if (simple_progress_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/progresshq') }}?simple_progress_id=" + simple_progress_id,
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#progress_hq_id").empty();
                        $("#progress_hq_id").append('<option>Select</option>');
                        $.each(res, function(key) {
                            $("#progress_hq_id").append('<option value="' + res[key].id +
                                '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#progress_hq_id").empty();
                    }
                }
            });
        } else {
            $("#progress_hq_id").empty();
            $("#progress_regional_id").empty();
        }
    });
    $('#progress_hq_id').change(function() {
        var progress_hq_id = $(this).val();
        if (progress_hq_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/progressregional') }}?progress_hq_id=" + progress_hq_id,
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#progress_regional_id").empty();
                        $("#progress_regional_id").append('<option>Select</option>');
                        $.each(res, function(key) {
                            $("#progress_regional_id").append('<option value="' + res[key]
                                .id + '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#progress_regional_id").empty();
                    }
                }
            });
        } else {
            $("#progress_regional_id").empty();
        }
    });
</script> --}}
<script>
    $('#simple_progress_id').change(function() {
        $('#progress_hq_id').val("");
        if ($('#simple_progress_id option:selected').text() == "DROP/HOLD") {
            $('#progress_hq_id').empty();
            $('#progress_hq_id').append('<option>-</option>');
            $('#progress_hq_id').html(
                '<option>-</option><option value="DROP">DROP</option><option value="HOLD">HOLD</option>');
        } else if ($('#simple_progress_id option:selected').text() == "NY RFI") {
            $('#progress_hq_id').empty();
            $('#progress_hq_id').append('<option >-</option>');
            $('#progress_hq_id').html(
                '<option>-</option><option value="WAITING KOM/KKST">WAITING KOM/KKST</option><option value="SURVEY">SURVEY</option><option value="DRM">DRM</option><option value="CANCEL">CANCEL</option><option value="SITAC">SITAC</option><option value="RFC">RFC</option><option value="CME">CME</option>'
            );
        } else if ($('#simple_progress_id option:selected').text() == "ON AIR") {
            $('#progress_hq_id').empty();
            $('#progress_hq_id').append('<option >-</option>');
            $('#progress_hq_id').html('<option>-</option><option value="ON AIR">ON AIR</option>');
        } else if ($('#simple_progress_id option:selected').text() == "RFI") {
            $('#progress_hq_id').empty();
            $('#progress_hq_id').append('<option>-</option>');
            $('#progress_hq_id').html('<option>-</option><option value="RFI">RFI</option>');
        } else {
            $('#progress_hq_id').empty();
            $('#progress_hq_id').append('<option >-</option>');
            $('#progress_hq_id').html(
                '<option>-</option><option value="RE-KOM/KKST">RE-KOM/KKST</option>');
        }
    });
</script>
<script>
    $('#progress_hq_id').change(function() {
        $('#progress_regional_id').val("");
        if ($('#progress_hq_id option:selected').text() == "HOLD") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="14. HOLD">14. HOLD</option>');
        } else if ($('#progress_hq_id option:selected').text() == "DROP") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="15. DROP">15. DROP</option>');
        } else if ($('#progress_hq_id option:selected').text() == "WAITING KOM/KKST") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html(
                '<option value="00. WAITING KOM/KKST">00. WAITING KOM/KKST</option>');
        } else if ($('#progress_hq_id option:selected').text() == "SURVEY") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="01. SURVEY">01. SURVEY</option>');
        } else if ($('#progress_hq_id option:selected').text() == "DRM") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="02. DRM">02. DRM</option>');
        } else if ($('#progress_hq_id option:selected').text() == "CANCEL") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="03. CANCEL">03. CANCEL</option>');
        } else if ($('#progress_hq_id option:selected').text() == "RFC") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="07. RFC">07. RFC</option>');
        } else if ($('#progress_hq_id option:selected').text() == "CME") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html(
                '<option value="08. CME OG">08. CME OG</option><option value="09. PLN CONNECTION">09. PLN CONNECTION</option>'
            );
        } else if ($('#progress_hq_id option:selected').text() == "SITAC") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html(
                '<option value="04. BAN/BAK">04. BAN/BAK</option><option value="05. IW OG">05. IW OG</option><option value="06. REKOM/PERIZINAN">06. REKOM/PERIZINAN</option>'
            );
        } else if ($('#progress_hq_id option:selected').text() == "ON AIR") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html(
                '<option value="11. LV MONITORING">11. LV MONITORING</option><option value="12. CONNECTED">12. CONNECTED</option><option value="13. ON AIR">13. ON AIR</option>'
            );
        } else if ($('#progress_hq_id option:selected').text() == "RFI") {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="10. RFI">10. RFI</option>');
        } else {
            $('#progress_regional_id').empty();
            $('#progress_regional_id').append('<option hidden>-</option>');
            $('#progress_regional_id').html('<option value="16. RE-KOM/KKST">16. RE-KOM/KKST</option>');
        }
    });
</script>
<!--========= SITE ID CITY DO NS BRANCH==========-->
{{-- <script type="text/javascript">
    $('#siteidactual_id').change(function() {
        var site_id = $(this).val();
        if (site_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/city') }}?site_id=" + site_id,
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#city_id").empty();
                        $("#city_id").append('<option>Select</option>');
                        $.each(res, function(key) {
                            $("#city_id").append('<option value="' + res[key].id + '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#city_id").empty();
                    }
                }
            });
        } else {
            $("#city_id").empty();
            $("#distrik_id").empty();
        }
    });
    $('#city_id').on('change', function() {
        var city_id = $(this).val();
        if (city_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/distrik') }}?city_id=" + city_id,
                success: function(res) {
                    if (res) {
                        $("#do_id").empty();
                        $("#do_id").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            $("#do_id").append('<option value="' + res[key].id + '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#do_id").empty();
                    }
                }
            });
        } else {
            $("#do_id").empty();
            $("#ns_id").empty();
        }
    });
    $('#do_id').change(function() {
        var do_id = $(this).val();
        if (do_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/ns') }}?do_id=" + do_id,
                success: function(res) {
                    console.log(res);
                    if (res) {
                        $("#ns_id").empty();
                        $("#ns_id").append('<option>Select</option>');
                        $.each(res, function(key) {
                            $("#ns_id").append('<option value="' + res[key].id + '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#ns_id").empty();
                    }
                }
            });
        } else {
            $("#ns_id").empty();
            $("#branch_id").empty();
        }
    });
    $('#ns_id').on('change', function() {
        var ns_id = $(this).val();
        if (ns_id) {
            $.ajax({
                type: "GET",
                url: "{{ url('/branch') }}?ns_id=" + ns_id,
                success: function(res) {
                    if (res) {
                        $("#branch_id").empty();
                        $("#branch_id").append('<option>Select</option>');
                        $.each(res, function(key, value) {
                            $("#branch_id").append('<option value="' + res[key].id +
                                '">' +
                                res[
                                    key].name + '</option>');
                        });

                    } else {
                        $("#branch_id").empty();
                    }
                }
            });
        } else {
            $("#branch_id").empty();
        }
    });
</script> --}}
<!--========= City New ==========-->
<script>
    $('#siteidactual_id').change(function() {
        $('#city_id').val("");
        if ($('#siteidactual_id option:selected').text() == "BDO") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Bondowoso">Bondowoso</option>');
        } else if ($('#siteidactual_id option:selected').text() == "BJO") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Bojonegoro">Bojonegoro</option>');
        } else if ($('#siteidactual_id option:selected').text() == "BWI") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Banyuwangi">Banyuwangi</option>');
        } else if ($('#siteidactual_id option:selected').text() == "GSK") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Gresik">Gresik</option>');
        } else if ($('#siteidactual_id option:selected').text() == "JBR") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#siteidactual_id option:selected').text() == "JMB") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Jombang">Jombang</option>');
        } else if ($('#siteidactual_id option:selected').text() == "KED") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Kediri">Kediri</option>');
        } else if ($('#siteidactual_id option:selected').text() == "KPJ") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#siteidactual_id option:selected').text() == "LMJ") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Lumajang">Lumajang</option>');
        } else if ($('#siteidactual_id option:selected').text() == "MDU") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Madiun">Madiun</option>');
        } else if ($('#siteidactual_id option:selected').text() == "MGT") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Magetan">Magetan</option>');
        } else if ($('#siteidactual_id option:selected').text() == "MJO") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Mojokerto">Mojokerto</option>');
        } else if ($('#siteidactual_id option:selected').text() == "NJK") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Nganjuk">Nganjuk</option>');
        } else if ($('#siteidactual_id option:selected').text() == "NWI") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Ngawi">Ngawi</option>');
        } else if ($('#siteidactual_id option:selected').text() == "PAE") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Kediri">Kediri</option>');
        } else if ($('#siteidactual_id option:selected').text() == "PRO") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Ponorogo">Ponorogo</option>');
        } else if ($('#siteidactual_id option:selected').text() == "PSN") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Pasuruan">Pasuruan</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SDA") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Sidoarjo">Sidoarjo</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SIT") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Situbondo">Situbondo</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SMP") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Sumenep">Sumenep</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SPG") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Sampang">Sampang</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SYX") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Surabaya">Surabaya</option>');
        } else if ($('#siteidactual_id option:selected').text() == "TAG") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Tulungagung">Tulungagung</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SBY") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Surabaya">Surabaya</option>');
        } else if ($('#siteidactual_id option:selected').text() == "SBX") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Surabaya">Surabaya</option>');
        } else if ($('#siteidactual_id option:selected').text() == "BKN") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Bangkalan">Bangkalan</option>');
        } else if ($('#siteidactual_id option:selected').text() == "PMN") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Pamekasan">Pamekasan</option>');
        } else if ($('#siteidactual_id option:selected').text() == "MLG") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#siteidactual_id option:selected').text() == "BTU") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Batu">Batu</option>');
        } else if ($('#siteidactual_id option:selected').text() == "LMG") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Lamongan">Lamongan</option>');
        } else if ($('#siteidactual_id option:selected').text() == "TBN") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Tuban">Tuban</option>');
        } else if ($('#siteidactual_id option:selected').text() == "PBO") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Probolinggo">Probolinggo</option>');
        } else if ($('#siteidactual_id option:selected').text() == "TGK") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Trenggalek">Trenggalek</option>');
        } else if ($('#siteidactual_id option:selected').text() == "BLR") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Blitar">Blitar</option>');
        } else if ($('#siteidactual_id option:selected').text() == "PCN") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Pacitan">Pacitan</option>');
        } else if ($('#siteidactual_id option:selected').text() == "BGL") {
            $('#city_id').empty();
            $('#city_id').append('<option hidden>-</option>');
            $('#city_id').html('<option>-</option><option value="Pasuruan">Pasuruan</option>');
        }
    });
</script>
<!--========= DO New ==========-->
<script>
    $('#city_id').change(function() {
        $('#do_id').val("");
        if ($('#city_id option:selected').text() == "Bondowoso") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#city_id option:selected').text() == "Bojonegoro") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Madiun">Madiun</option>');
        } else if ($('#city_id option:selected').text() == "Banyuwangi") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Banyuwangi">Banyuwangi</option>');
        } else if ($('#city_id option:selected').text() == "Gresik") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Surabaya Utara">Surabaya Utara</option>');
        } else if ($('#city_id option:selected').text() == "Jember") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#city_id option:selected').text() == "Jombang") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Kediri">Kediri</option>');
        } else if ($('#city_id option:selected').text() == "Kediri") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Kediri">Kediri</option>');
        } else if ($('#city_id option:selected').text() == "Malang") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#city_id option:selected').text() == "Lumajang") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Probolinggo">Probolinggo</option>');
        } else if ($('#city_id option:selected').text() == "Madiun") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Madiun">Madiun</option>');
        } else if ($('#city_id option:selected').text() == "Magetan") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Ponorogo">Ponorogo</option>');
        } else if ($('#city_id option:selected').text() == "Mojokerto") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Pasuruan">Pasuruan</option>');
        } else if ($('#city_id option:selected').text() == "Nganjuk") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Kediri">Kediri</option>');
        } else if ($('#city_id option:selected').text() == "Ngawi") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Kediri">Kediri</option>');
        } else if ($('#city_id option:selected').text() == "Ponorogo") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Ponorogo">Ponorogo</option>');
        } else if ($('#city_id option:selected').text() == "Pasuruan") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Pasuruan">Pasuruan</option>');
        } else if ($('#city_id option:selected').text() == "Sidoarjo") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Surabaya Selatan">Surabaya Selatan</option>');
        } else if ($('#city_id option:selected').text() == "Situbondo") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Banyuwangi">Banyuwangi</option>');
        } else if ($('#city_id option:selected').text() == "Sumenep") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Pamekasan">Pamekasan</option>');
        } else if ($('#city_id option:selected').text() == "Sampang") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Bangkalan">Bangkalan</option>');
        } else if ($('#city_id option:selected').text() == "Surabaya") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html(
                '<option>-</option><option value="Surabaya Utara">Surabaya Utara</option><option value="Surabaya Barat">Surabaya Barat</option><option value="Surabaya Timur">Surabaya Timur</option><option value="Surabaya Selatan">Surabaya Selatan</option>'
            );
        } else if ($('#city_id option:selected').text() == "Tulungagung") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Tulungagung">Tulungagung</option>');
        } else if ($('#city_id option:selected').text() == "Bangkalan") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Bangkalan">Bangkalan</option>');
        } else if ($('#city_id option:selected').text() == "Pamekasan") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Pamekasan">Pamekasan</option>');
        } else if ($('#city_id option:selected').text() == "Malang") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#city_id option:selected').text() == "Batu") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#city_id option:selected').text() == "Lamongan") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Lamongan">Lamongan</option>');
        } else if ($('#city_id option:selected').text() == "Tuban") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Lamongan">Lamongan</option>');
        } else if ($('#city_id option:selected').text() == "Probolinggo") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Probolinggo">Probolinggo</option>');
        } else if ($('#city_id option:selected').text() == "Trenggalek") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Tulungagung">Tulungagung</option>');
        } else if ($('#city_id option:selected').text() == "Blitar") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Tulungagung">Tulungagung</option>');
        } else if ($('#city_id option:selected').text() == "Pacitan") {
            $('#do_id').empty();
            $('#do_id').append('<option hidden>-</option>');
            $('#do_id').html('<option>-</option><option value="Ponorogo">Ponorogo</option>');
        }
    });
</script>
<!--========= NS New ==========-->
<script>
    $('#do_id').change(function() {
        $('#ns_id').val("");
        if ($('#do_id option:selected').text() == "Surabaya Utara") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Surabaya Utara">Surabaya Utara</option>');
        } else if ($('#do_id option:selected').text() == "Surabaya Barat") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Surabaya Barat">Surabaya Barat</option>');
        } else if ($('#do_id option:selected').text() == "Surabaya Timur") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Surabaya Utara">Surabaya Utara</option>');
        } else if ($('#do_id option:selected').text() == "Surabaya Selatan") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Surabaya Selatan">Surabaya Selatan</option>');
        } else if ($('#do_id option:selected').text() == "Bangkalan") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Surabaya Utara">Surabaya Utara</option>');
        } else if ($('#do_id option:selected').text() == "Banyuwangi") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#do_id option:selected').text() == "Jember") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#do_id option:selected').text() == "Kediri") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Lamongan">Lamongan</option>');
        } else if ($('#do_id option:selected').text() == "Lamongan") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Lamongan">Lamongan</option>');
        } else if ($('#do_id option:selected').text() == "Madiun") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Madiun">Madiun</option>');
        } else if ($('#do_id option:selected').text() == "Malang") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#do_id option:selected').text() == "Pamekasan") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Surabaya Utara">Surabaya Utara</option>');
        } else if ($('#do_id option:selected').text() == "Pasuruan") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Malang">Malang</option>');
        } else if ($('#do_id option:selected').text() == "Ponorogo") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Madiun">Madiun</option>');
        } else if ($('#do_id option:selected').text() == "Probolinggo") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#do_id option:selected').text() == "Tulungagung") {
            $('#ns_id').empty();
            $('#ns_id').append('<option hidden>-</option>');
            $('#ns_id').html('<option>-</option><option value="Madiun">Madiun</option>');
        }
    });
</script>
<!--========= Branch New ==========-->
<script>
    $('#ns_id').change(function() {
        $('#branch_id').val("");
        if ($('#ns_id option:selected').text() == "Surabaya Utara") {
            $('#branch_id').empty();
            $('#branch_id').append('<option hidden>-</option>');
            $('#branch_id').html(
                '<option>-</option><option value="Surabaya">Surabaya</option><option value="Lamongan">Lamongan</option>'
            );
        } else if ($('#ns_id option:selected').text() == "Surabaya Selatan") {
            $('#branch_id').empty();
            $('#branch_id').append('<option hidden>-</option>');
            $('#branch_id').html(
                '<option>-</option><option value="Surabaya">Surabaya</option><option value="Sidoarjo">Sidoarjo</option>'
            );
        } else if ($('#ns_id option:selected').text() == "Jember") {
            $('#branch_id').empty();
            $('#branch_id').append('<option hidden>-</option>');
            $('#branch_id').html('<option>-</option><option value="Jember">Jember</option>');
        } else if ($('#ns_id option:selected').text() == "Lamongan") {
            $('#branch_id').empty();
            $('#branch_id').append('<option hidden>-</option>');
            $('#branch_id').html(
                '<option>-</option><option value="Lamongan">Lamongan</option><option value="Madiun">Madiun</option>'
            );
        } else if ($('#ns_id option:selected').text() == "Madiun") {
            $('#branch_id').empty();
            $('#branch_id').append('<option hidden>-</option>');
            $('#branch_id').html(
                '<option>-</option><option value="Madiun">Madiun</option><option value="Lamongan">Lamongan</option><option value="Malang">Malang</option>'
            );
        } else if ($('#ns_id option:selected').text() == "Malang") {
            $('#branch_id').empty();
            $('#branch_id').append('<option hidden>-</option>');
            $('#branch_id').html(
                '<option>-</option><option value="Malang">Malang</option><option value="Sidoarjo">Sidoarjo</option>'
            );
        }
    });
</script>
