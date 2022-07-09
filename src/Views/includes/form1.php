
    <div class="container w-25">
        <form action="/blog_php/Sign/insert"  method="post">
            <div class="mb-3">
                <label for="fname" class="form-label">First name</label>
                <input type="text" class="form-control" name="fname">

            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lname">

            </div>
            <div class="mb-3">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" name="pseudo">

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">

            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">

            </div>                         
            <div class="mb-3">
                <label for="dateOfBirth" class="form-label">Date of birth</label>
                <input type="date" class="form-control" name="dateOfBirth">
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit">register</button>
            </div>
        </form>
    </div>