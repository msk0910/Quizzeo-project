document.addEventListener('DOMContentLoaded', function () {
    const questionsList = document.getElementById('questions-list');
    const addQuestionBtn = document.getElementById('add-question');
    
    let questionCount = 0;

    addQuestionBtn.addEventListener('click', function () {
        questionCount++;
        const questionHTML = `
            <div class="question-block">
                <h3>📝 Question ${questionCount}</h3>
                <input type="text" name="question${questionCount}" placeholder="Entrez votre question" required>

                <div class="reponses">
                    <h4>✅ Ajoutez les réponses</h4>
                    <label><input type="text" name="reponse${questionCount}_1" placeholder="Réponse 1" required></label>
                    <label><input type="text" name="reponse${questionCount}_2" placeholder="Réponse 2" required></label>
                    <label><input type="text" name="reponse${questionCount}_3" placeholder="Réponse 3" required></label>
                    <label><input type="text" name="reponse${questionCount}_4" placeholder="Réponse 4" required></label>
                    
                    <label>✔️ Cochez la bonne réponse :
                        <select name="correct${questionCount}" required>
                            <option value="1">Réponse 1</option>
                            <option value="2">Réponse 2</option>
                            <option value="3">Réponse 3</option>
                            <option value="4">Réponse 4</option>
                        </select>
                    </label>
                </div>
            </div>
        `;
        questionsList.innerHTML += questionHTML;
    });
});
