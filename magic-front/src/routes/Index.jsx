import React from "react";
import CardsList from "../components/CardsList.jsx";
import {Route, useParams} from "wouter";
import CardsDetails from "../components/CardsDetails.jsx";

function Index()
{
    return (
    <switch>
        <Route path="/">
            <CardsList />
        </Route>
    <Route path="/card/:id">
        {params=> <CardsDetails id={params.id} /> }
    </Route>
    </switch>
    );
}
export default Index;