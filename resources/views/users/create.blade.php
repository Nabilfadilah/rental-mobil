<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        {{-- Basic Form --}}
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add User</h6>
                <form>
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" wire:model="nama" id="nama"
                            value="{{ @old('nama') }}">
                        @error('nama')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" wire:model="email" id="email"
                            value="{{ @old('email') }}">
                        @error('email')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password</label>
                        <input type="password" class="form-control" wire:model="password" id="password"
                            value="{{ @old('password') }}">
                        @error('password')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Role" class="form-label">Role</label>
                        <select class="form-select" wire:model="role" id="role">
                            <option value="">--Pilih--</option>
                            <option value="admin">admin</option>
                            <option value="pimpinan">pimpinan</option>
                        </select>
                        @error('role')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="button" wire:click.prevent="store" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>

        {{-- Horizontal Form --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Horizontal Form</h6>
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    First radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Checkbox</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Check me out
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div> --}}

        {{-- Floating Label --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Floating Label</h6>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Works with selects</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Comments</label>
                </div>
            </div>
        </div> --}}

        {{-- File Input --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">File Input</h6>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Small file input example</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
                <div>
                    <label for="formFileLg" class="form-label">Large file input example</label>
                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
            </div>
        </div> --}}

        {{-- select --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Select</h6>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select" multiple aria-label="multiple select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div> --}}

        {{-- check, Radio & Switch --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Check, Radio & Switch</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Checked checkbox
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                        checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">2</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3" disabled>
                    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                </div>
                <hr>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                        input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
                        checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                        input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled"
                        disabled>
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                        input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch"
                        id="flexSwitchCheckCheckedDisabled" checked disabled>
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                        switch checkbox input</label>
                </div>
            </div>
        </div> --}}

        {{-- input group --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Input Group</h6>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                     value="nama"n1">
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" value="nama"n2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
                <label for="basic-url" class="form-label">Your vanity URL</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                    <input type="text" class="form-control" id="basic-url" value="nama"n3">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                </div>
                <div class="input-group">
                    <span class="input-group-text">With textarea</span>
                    <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
            </div>
        </div> --}}

        {{-- sizing --}}
        {{-- <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Sizing</h6>
                <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg"
                    aria-label=".form-control-lg example">
                <input class="form-control mb-3" type="text" placeholder="Default input"
                    aria-label="default input example">
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                    aria-label=".form-control-sm example">
            </div>
        </div> --}}
    </div>
</div>
