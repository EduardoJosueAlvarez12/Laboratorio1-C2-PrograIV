<div class="bg-light" style="background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url('https://media.istockphoto.com/vectors/hand-drawn-starry-sky-seamless-pattern16-vector-id1282216378?b=1&k=20&m=1282216378&s=612x612&w=0&h=huM1AtxgB1BxRBuxZra1Ae-rV3XEg-SJrSYSAfnmzKc=');">
    <div class="row g-5">
        <center>
            <div class="col-6">
                <!-- Aquí empieza el formulario -->
                <form class="needs-validation">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Example: Angelina"
                                value="{{ isset($actor->first_name)?$actor->first_name:'' }}" required>

                            <div class="invalid-feedback">
                                Type in your first name
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Example: Jolie"
                                value="{{ isset($actor->middle_name)?$actor->middle_name:'' }}" required>
                            <div class="invalid-feedback">
                                Type in your middle name
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" class="form-control" name="last_name" id="last_name" placeholder="Example: Voight"
                                value="{{ isset($actor->last_name)?$actor->last_name:'' }}" required>
                            <div class="invalid-feedback">
                                Type in your last name
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="birth_place" class="form-label">Birth Place</label>
                            <input type="text" class="form-control" name="birth_place" id="birth_place"
                                placeholder="LA, California, USA"
                                value="{{ isset($actor->birth_place)?$actor->birth_place:'' }}" required>

                            <div class="invalid-feedback">
                                Type in you birth place
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="birth_date" class="form-label">Birth Date</label>
                            <input type="date" class="form-control" name="birth_date" id="birth_date"
                                placeholder="YYYY-MM-DD" value="{{ isset($actor->birth_place)?$actor->birth_place:'' }}" required>

                            <div class="invalid-feedback">
                                Type in you birth date
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="height" class="form-label">Height</label>
                            <input type="number" step="any" class="form-control" name="height" id="height" placeholder="Example: 1.75"
                                value="{{ isset($actor->height)?$actor->height:'' }}" required />
                            <div class="invalid-feedback">
                                Type in you height
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="net_worth" class="form-label">Net Worth</label>
                            <input type="number" step="any" class="form-control" name="net_worth" id="net_worth"
                                placeholder="Example: 1,000,000" value="{{ isset($actor->net_worth)?$actor->net_worth:'' }}"
                                required />
                            <div class="invalid-feedback">
                                Type in you net worth
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />

                </form>
            <button class="w-100 btn btn-dark btn-lg" type="submit">Save data</button>

                <!-- final del formulario -->
                <hr class="my-4" />
            </div>
        </center>
    </div>
</div>