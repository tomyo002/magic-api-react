import React from "react";
// eslint-disable-next-line import/no-unresolved
import { Route, useParams } from "wouter";
import CardsList from "../components/CardsList";
import CardsDetails from "../components/CardsDetails";

function Index() {
  return (
    <switch>
      <Route path="/">
        <CardsList />
      </Route>
      <Route path="/card/:id">
        {(params) => <CardsDetails id={params.id} />}
      </Route>
    </switch>
  );
}
export default Index;
