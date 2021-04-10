@extends('layouts.app')
@section('content')
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-info">
                        <span class="card-description text-white">
                            Hello {{Auth::user()->name}}, Update your profile.
                        </span>
                    </div>
                    <form action="{{ url('/profile/update') }}" method="post">
                        @csrf
                        <article>

                        </article>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="amazing_talent" class="text-dark">
                                        Amazing Talent!!!
                                    </label>
                                    <select name="amazing_talent" class="form-control form-control-sm text-dark" id="issue_severity" required>
                                        <option class="text-purple text-bold" value="Spoken Words">Spoken Words</option>
                                        <option class="text-purple text-bold" value="Writing">Writing</option>
                                        <option class="text-purple text-bold" value="Dancing">Dancing </option>
                                        <option class="text-purple text-bold" value="Singing">Singing</option>
                                        <option class="text-purple text-bold" value="Rap">Rap </option>
                                        <option class="text-purple text-bold" value="Comedy">Comedy</option>
                                        <option class="text-purple text-bold" value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_bio" class="text-dark">
                                        Brief catchy Bio:
                                    </label>
                                    <textarea name="user_bio" class="form-control" id="user_bio" rows="3" required maxlength="250" minlength="100"></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-info mr-2">Update</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection