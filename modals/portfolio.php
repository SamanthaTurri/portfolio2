<dialog id="modal-portfolio" aria-labelledby="modal-portfolio-title" aria-describedby="modal-portfolio-desc">
    <article class="modal-content">
        <h2 id="modal-portfolio-title">This portfolio</h2>
        <div id="modal-portfolio-desc">
            <h3>Objective</h3>
            <p class="modal-intro-text">Replacing my 1.0 WordPress portfolio with a 2.0 static design.</p>
            <div class="modal-item">
                <!-- TODO -->
                <div class="crossfade">
                    <picture class="screenshot">
                        <source
                            srcset="img/24f/1080p.webp"
                            type="image/webp"
                            media="(min-width: 1080px)">
                        <source
                            srcset="img/24f/720p.webp"
                            type="image/webp"
                            media="(min-width: 720px)">
                        <source
                            srcset="img/24f/540p.webp"
                            type="image/webp">
                        <img
                            src="img/24f/540p.png"
                            alt="A portion of the tours landing page on portfolio Food Tours including introductory text and cards linking to individual tours."
                            loading="lazy">
                    </picture>
                    <picture class="screenshot">
                        <source
                            srcset="img/vancity/1080p.webp"
                            type="image/webp"
                            media="(min-width: 1080px)">
                        <source
                            srcset="img/vancity/720p.webp"
                            type="image/webp"
                            media="(min-width: 720px)">
                        <source
                            srcset="img/vancity/540p.webp"
                            type="image/webp">
                        <img
                            src="img/vancity/540p.png"
                            alt="A portion of the tours landing page on portfolio Food Tours including introductory text and cards linking to individual tours."
                            loading="lazy">
                    </picture>
                </div>
            </div>
            <details>
                <summary class="btn">Project details</summary>
                <div class="modal-item">
                    <h3>Tools</h3>
                        <ul class="modal-tools-list">
                            <li>MAMP</li>
                            <li>Pixelmator Pro</li>
                            <li>Copilot Pro</li>
                        </ul>
                </div>
    
                <div class="modal-item">
                    <h3>Challenge</h3>
                    <p>The initial version of my portfolio was a WordPress custom block theme. While the actual content was decent, the design and tech stack did not showcase my capabilities or personality. I decided to shed the weight and complexity of WordPress in favour of core web technologies.</p>
                </div>

                <div class="modal-item">
                    <h3>Kabnan concept</h3>
                    <p>My colleague <a href="https://mabebymichelle.com/"><span class="michelle">Michelle</span></a> suggested the concept of a Kanban board. This was meant to reference the project management work I did during our BCIT program. The result is the home page concept with rows of cards inspired by the GitHub Projects "backlog" view.</p>
                </div>

                <div class="modal-item">
                    <h3>Tech stack</h3>
                    <p>This site leans heavily into modern HTML and CSS with sprinklings of PHP and Javascript. The result is highly-performant; everything is a single page with <code>&lt;dialog&gt;</code> nodes for loading inner content. See the link to the repository below if you're curious about how it's built.</p>
                </div>

                <div class="modal-item">
                    <h3>Copilot</h3>
                    <p>After a nearly year-long break from AI-assisted coding, this site was developed with LLM assistance. Copilot (specifically Claude Sonnet 4.6) helped me in three distinct ways:</p>
                    <ul>
                        <li><b>Research:</b> What base technology approaches and libraries might I use to accomplish a broad vision?</li>
                        <li><b>Boilerplate:</b> Saving time on grunt work coding, such as the Javascript that opens and closes these cards.</li>
                        <li><b>Styling:</b> Generating and refactoring CSS based on my prompts, particularly when I didn't know how to achieve a specific outcome. (Like the animation playing above.)</li>
                    </ul>
                    <p>While LLM-assistance takes some of the satisfaction out of coding, it yields better, faster results.</p>
                </div>
                
                <div class="modal-item">
                    <h3>Takeaways</h3>
                    <p>Content Management Systems and frameworks like React are necessities for complex projects. But after several months of WordPress-focused development it was truly freeing to return to core web technologies. I'm much happier with this 2.0 portfolio.</p>
                </div>
            </details>
        </div>
        <a href="https://github.com/SamanthaTurri/portfolio2" target="_blank" class="ext btn">GitHub repository</a>
        <button class="btn close" aria-label="Close dialog">Close</button>
    </article>
</dialog>