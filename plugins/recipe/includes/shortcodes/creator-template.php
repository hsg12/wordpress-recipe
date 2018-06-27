<div id="recipeStatus"></div>
<form id="recipeForm">
    <div class="form-group mb-4">
        <label for="r_inputTitle">Title</label>
        <input type="text" class="form-control" id="r_inputTitle">
    </div>
    
    <!-- 
    <div class="form-group">
        <label for="recipecontenteditor">Content</label>
        <textarea class="form-control" id="recipecontenteditor"></textarea>
    </div>
    -->

    CONTENT_EDITOR

    <div class="form-group mt-4">
        <label for="r_inputIngredients">Ingredients</label>
        <input type="text" class="form-control" id="r_inputIngredients">
    </div>
    <div class="form-group">
        <label for="r_inputTime">Cooking Time</label>
        <input type="text" class="form-control" id="r_inputTime">
    </div>
    <div class="form-group">
        <label for="r_inputUtensils">Cooking Utensils</label>
        <input type="text" class="form-control" id="r_inputUtensils">
    </div>
    <div class="form-group">
        <label for="r_inputLevel">Cooking Level</label>
        <select class="form-control" id="r_inputLevel">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Expert">Expert</option>
        </select>
    </div>
    <div class="form-group">
        <label for="r_inputMealType">Meal Type</label>
        <input type="text" class="form-control" id="r_inputMealType">
    </div>
    <div class="form-group mt-5">
        <button type="submit" name="submit" class="btn btn-primary">Submit Recipe</button>
    </div>
</form>
