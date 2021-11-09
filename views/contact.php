<main class="container mx-auto my-5 border px-5 py-5">
    <h1 class="text-center">Contact Us</h1>
    <form method="POST" action="/contact">
        <div class="mb-3">
            <label class="form-label">Subject</label>
            <input class="form-control" name="subject">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary form-control">Submit</button>
    </form>
</main>
