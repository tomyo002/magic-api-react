import React from "react";
import { Route } from "wouter";
import CardsList from "../components/CardsList";
import CardsDetails from "../components/CardsDetails";
import Navbar from "../components/Navbar";
import KeywordList from "../components/KeywordList";
import ExtensionList from "../components/ExtensionList";
import CardsForKeyword from "../components/CardsForKeyword";
import CardForExtension from "../components/CardForExtension";
import ElementList from "../components/ElementList";
import CardForElement from "../components/CardForElement";

function Index() {
  return (
    <switch>
      <Navbar />
      <Route path="/" component={CardsList} />
      <Route path="/card/:id">
        {(params) => <CardsDetails id={params.id} />}
      </Route>
      <Route path="/keyword" component={KeywordList} />
      <Route path="/keyword/:id">
        {(params) => <CardsForKeyword id={params.id} />}
      </Route>
      <Route path="/extension" component={ExtensionList} />
      <Route path="/extension/:id">
        {(params) => <CardForExtension id={params.id} />}
      </Route>
      <Route path="/element" component={ElementList} />
      <Route path="/element/:id">
        {(params) => <CardForElement id={params.id} />}
      </Route>
    </switch>
  );
}
export default Index;
