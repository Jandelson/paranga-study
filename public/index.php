<?php 
require 'header.php';
?>

<main class="container p-5">
    <div class="card shadow mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">Olá seja bem-vindo, acompanhe abaixo os agendamentos futuros </div>
                        <div class="col-md-6 text-end">
                            <a href="agenda">
                                <button class="btn btn-outline-success">
                                    Nova Agendamento
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Ultimos Agendamentos</h6>
        <div class="d-flex text-muted pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Ye-yée</title>
                <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
                    dy=".3em">32x32</text>
            </svg>

            <p class="pb-3 mb-0 small lh-sm border-bottom">
                <strong class="d-block text-gray-dark">@Alguem</strong>
                Some representative placeholder content, with some information about this user. Imagine this being some
                sort of status update, perhaps?
            </p>
        </div>
        <div class="d-flex text-muted pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Ye-yée</title>
                <rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#e83e8c"
                    dy=".3em">32x32</text>
            </svg>

            <p class="pb-3 mb-0 small lh-sm border-bottom">
                <strong class="d-block text-gray-dark">@Outro Alguém</strong>
                Some more representative placeholder content, related to this other user. Another status update,
                perhaps.
            </p>
        </div>
        <div class="d-flex text-muted pt-3">
            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Ye-yée</title>
                <rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%" fill="#6f42c1"
                    dy=".3em">32x32</text>
            </svg>

            <p class="pb-3 mb-0 small lh-sm border-bottom">
                <strong class="d-block text-gray-dark">@Mais um alguém</strong>
                This user also gets some representative placeholder content. Maybe they did something interesting, and
                you really want to highlight this in the recent updates.
            </p>
        </div>
    </div>
</main>
<?php 
require 'footer.php'; ?>