<script>
  import TextContent from "../TextContent.svelte";
</script>

<div class="column title">
  <h1>Nathan Baines</h1>
  <h3><i>A programmer with true passion for their craft</i></h3>
  <h4>
    MComp Computer Science @ University of Sussex, and founder of the Nathcat
    network.
  </h4>
</div>
<TextContent>
  <p>
    I've been programming since I was 11, to me it's always been more than just
    a means to an end, it's more than just a way to solve a problem, it's part
    of who I am, and is a skill I aim to keep bettering throughout my life.
    Mathematics as well, is another such skill which tends to feature a lot more
    in my theoretical work.
  </p>
  <p>
    I spent a long time working on my own, but since University I have met a
    group of people who feel a very similar draw to programming, and I have
    teamed up with them in a lot of my more recent work.
  </p>
  <p>
    Outside of my studies, you might find me listening to vocaloid music, or
    playing Elite Dangerous and Final Fantasy XIV, or working on the Nathcat
    network!
  </p>
</TextContent>

<h2>Education</h2>

<TextContent>
  <div class="experience-title">
    <h3>A-Levels</h3>
    <h4>Completed in 2023 @ Mascalls Academy</h4>
  </div>
  <ul>
    <li><b>A</b> - Computer Science</li>
    <li><b>A</b> - Mathematics</li>
    <li><b>B</b> - Physics</li>
  </ul>
  <div class="experience-title">
    <h3>MComp Computer Science</h3>
    <h4>Completed in 2027 @ University of Sussex</h4>
  </div>
  <p>
    I studied many modules as part of my degree at Sussex, I have listed some of
    the most notable below.
  </p>
  <ul>
    <li>Quantum Computing</li>
    <li>Cryptography</li>
    <li>Computer Security</li>
    <li>Algorithmic Approaches to Mathematics</li>
    <li>Limits of Computing</li>
    <li>Algorithms and Data Structures</li>
    <li>Comparative Programming</li>
    <li>Advanced Software Engineering</li>
  </ul>
  <p>
    As part of my degree I was also required to complete a year long research
    project. I conducted research into various computational algorithms for
    solving the Rubik's Cube, and implemented Thistlethwaite's algorithm in a
    WebGL application, <a href="https://cube.nathcat.net">CubeCat</a>. You can
    find a copy of my final report <a href="/CubeCat-final.pdf">here</a>.
    Despite the stress, I thoroughly enjoyed working on this project, and the
    experience is one of many things drawing me to a career in research!
  </p>
</TextContent>

<h2>Projects</h2>
<TextContent>
  <h3>The Nathcat Network</h3>
  <p>
    The Nathcat Network is the culmination of two years of work, and is
    certainly my largest project yet.
  </p>
  <p>
    The network manifests in a core collection of federatable application
    services. which the rest of my applications can be built on top of. I have
    attempted to embrace a federatable / standalone design for each service,
    such that other developers can use their own instances, or just use my
    instances!
  </p>
  <p>The core services include:</p>
  <ul>
    <li>
      <b>AuthCat</b> - An OAuth2.0 (<a
        href="https://www.rfc-editor.org/info/rfc6749/">RFC 6479</a
      >) compliant authentication server.
    </li>
    <li>
      <b>DataCat</b> - Basic application services API, allowing apps to create and
      manage user groups, leaderboards, etc...
    </li>
  </ul>
  <h3>NoteCat</h3>
  <p>A web application for creating and editing LaTeX documents.</p>
  <p>
    You can use NoteCat <a href="https://note.nathcat.net">here</a>.
  </p>
  <h3>PeopleCat</h3>
  <p>
    PeopleCat is a messaging / social media platform based on the Nathcat
    Network's services. I have been working on this project with my friend
    Brooke.
  </p>
  <p>
    This project has been a work in progress for many years. It was directly
    inspired by my A-Level project <a href="/Nathan Baines - MessageCat.pdf"
      >MessageCat</a
    >, and as such its initial incarnations and prototypes pre-date the Nathcat
    Network. Since I have been rebuilding most of the network with a more up to
    date tech stack, I haven't had a chance to work on PeopleCat, but hopefully
    I will revisit it soon!
  </p>
</TextContent>

<style>
  .title {
    width: 100%;
    margin-bottom: 25px;
  }
  .title h1 {
    font-size: 5em;
    margin-bottom: 10px;
  }

  h2 {
    width: 100%;
  }

  .experience-title h3 {
    margin-bottom: 0;
  }

  .experience-title h4 {
    margin-top: 0;
  }
</style>
