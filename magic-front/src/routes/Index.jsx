import React from "react";
// eslint-disable-next-line import/no-unresolved
import { Route, useParams } from "wouter";
import CardsList from "../components/CardsList";
import CardsDetails from "../components/CardsDetails";
import Navbar from "../components/Navbar";
import KeywordList from "../components/KeywordList";
import ExtensionList from "../components/ExtensionList";

function Index() {
  return (
    <switch>
      <Navbar />
      <Route path="/">
        <CardsList />
      </Route>
      <Route path="/card/:id">
        {(params) => <CardsDetails id={params.id} />}
      </Route>
      <Route path="/keyword">
        <KeywordList />
      </Route>
      <Route path="/extension">
        <ExtensionList />
      </Route>
    </switch>
  );
}
export default Index;
