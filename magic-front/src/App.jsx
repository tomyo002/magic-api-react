import React from "react";
import CardsList from "./components/CardsList.jsx";
import Index from "./routes/Index.jsx";

function App() {
  return (
    <div className="app">
      <header className="app__header header">
        <h1 className="header__title">Magic</h1>
      </header>
      <main className="app__main">
        <Index />
      </main>
      <footer className="app__footer footer">footer</footer>
    </div>
  );
}

export default App;
