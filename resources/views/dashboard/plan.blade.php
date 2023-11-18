@extends('dashboard.dash')

@section('plan')
    <x-add-task />
    <div class="card card-fluid">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th> task </th>
                        <th> note </th>
                        <th> date </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                          <p>Cookies Oatmeal Raisin</p>
                        </td>
                        <td class="align-middle w-50"> 366 </td>
                        <td class="align-middle"> 155 </td>
                        <td class="align-middle text-right">
                          <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                          <a href="#" class="btn btn-sm btn-icon btn-secondary"><i class="far fa-trash-alt"></i> <span class="sr-only">Remove</span></a>
                        </td>
                      </tr>
                </tbody>
            </table>
        </div>
    @endsection
