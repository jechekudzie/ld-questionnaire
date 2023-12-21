<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Development Questionnaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .wizard-page {
            display: none;
        }
        .wizard-page.active {
            display: block;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Website Development Questionnaire</h2>

    <form id="questionnaireForm" action="/submit-your-response" method="post">

        <!-- Page 1 -->
        <div id="page1" class="wizard-page active">
            <div class="mb-3">
                <label for="mission" class="form-label">1. Company Overview - Mission:</label>
                <input type="text" class="form-control" id="mission" name="mission">
            </div>
            <div class="mb-3">
                <label for="vision" class="form-label">Vision:</label>
                <input type="text" class="form-control" id="vision" name="vision">
            </div>
            <div class="mb-3">
                <label for="products_services" class="form-label">Products/Services:</label>
                <input type="text" class="form-control" id="products_services" name="products_services">
            </div>
            <div class="mb-3">
                <label for="goals_objectives" class="form-label">2. Website Goals and Objectives:</label>
                <textarea class="form-control" id="goals_objectives" name="goals_objectives"></textarea>
            </div>
            <div class="mb-3">
                <label for="audience_profile" class="form-label">3. Target Audience Profile:</label>
                <textarea class="form-control" id="audience_profile" name="audience_profile"></textarea>
            </div>
            <button type="button" class="btn btn-primary" onclick="navigate(2)">Next</button>
        </div>

        <!-- Page 2 -->
        <div id="page2" class="wizard-page">
            <div class="mb-3">
                <label for="design_inspirations" class="form-label">4. Design Inspirations:</label>
                <textarea class="form-control" id="design_inspirations" name="design_inspirations"></textarea>
            </div>
            <div class="mb-3">
                <label for="branding_preferences" class="form-label">5. Branding and Design Preferences:</label>
                <textarea class="form-control" id="branding_preferences" name="branding_preferences"></textarea>
            </div>
            <div class="mb-3">
                <label for="custom_features" class="form-label">6. Custom Features Required:</label>
                <textarea class="form-control" id="custom_features" name="custom_features"></textarea>
            </div>
            <div class="mb-3">
                <label for="third_party_integrations" class="form-label">7. Third-party Integrations:</label>
                <textarea class="form-control" id="third_party_integrations" name="third_party_integrations"></textarea>
            </div>
            <div class="mb-3">
                <label for="content_management_needs" class="form-label">8. Content Management Needs:</label>
                <textarea class="form-control" id="content_management_needs" name="content_management_needs"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" onclick="navigate(1)">Previous</button>
            <button type="button" class="btn btn-primary" onclick="navigate(3)">Next</button>
        </div>

        <!-- Page 3 -->
        <div id="page3" class="wizard-page">
            <div class="mb-3">
                <label for="traffic_strategies" class="form-label">9. Traffic and Conversion Strategies:</label>
                <textarea class="form-control" id="traffic_strategies" name="traffic_strategies"></textarea>
            </div>
            <div class="mb-3">
                <label for="budget_timeline" class="form-label">10. Budget and Timeline:</label>
                <textarea class="form-control" id="budget_timeline" name="budget_timeline"></textarea>
            </div>
            <div class="mb-3">
                <label for="maintenance_needs" class="form-label">11. Post-Launch Maintenance Needs:</label>
                <textarea class="form-control" id="maintenance_needs" name="maintenance_needs"></textarea>
            </div>
            <div class="mb-3">
                <label for="seo_requirements" class="form-label">12. SEO Requirements:</label>
                <textarea class="form-control" id="seo_requirements" name="seo_requirements"></textarea>
            </div>
            <div class="mb-3">
                <label for="digital_marketing_services" class="form-label">13. Additional Digital Marketing Services:</label>
                <textarea class="form-control" id="digital_marketing_services" name="digital_marketing_services"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" onclick="navigate(2)">Previous</button>
            <button type="button" class="btn btn-primary" onclick="navigate(4)">Next</button>
        </div>

        <!-- Page 4 -->
        <div id="page4" class="wizard-page">
            <div class="mb-3">
                <label for="compliance_security" class="form-label">14. Compliance and Security Needs:</label>
                <textarea class="form-control" id="compliance_security" name="compliance_security"></textarea>
            </div>
            <div class="mb-3">
                <label for="additional_requirements" class="form-label">15. Additional Requirements/Considerations:</label>
                <textarea class="form-control" id="additional_requirements" name="additional_requirements"></textarea>
            </div>
            <button type="button" class="btn btn-secondary" onclick="navigate(3)">Previous</button>
            <input type="submit" value="Submit" class="btn btn-success">
        </div>

    </form>
</div>

<script>
    function navigate(pageNum) {
        var pages = document.getElementsByClassName('wizard-page');
        for (var i = 0; i < pages.length; i++) {
            pages[i].classList.remove('active');
        }
        document.getElementById('page' + pageNum).classList.add('active');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
