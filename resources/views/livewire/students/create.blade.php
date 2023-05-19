<div>
    <br />
    <h1 style="font-size:30px ;">Create Student</h1>
    <br />


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form wire:submit.prevent="store">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" placeholder="Write Here Name" class="form-control" id="name" wire:model="name">
        </div>
        <br />

        <div class="form-group">
            <label for="grade">Grade:</label>
            <input type="text" placeholder="Write Here Grade" class="form-control" id="grade" wire:model="grade">
        </div>
        <br />

        <div class="form-group">
            <label for="department">Department:</label>
            <input type="text" placeholder="Write Here Department" class="form-control" id="department" wire:model="department">
        </div>
        <br />
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


<style>
    .btn {
        background-color: #198754;
        color: white;
        padding: 10px 25px;
        margin: 10px;
        border-radius: 10px;
    }
</style>