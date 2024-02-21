import React, {useEffect, useState} from "react";
import PropTypes from "prop-types";
import {fetchCapacity} from "../services/api/Capacities.js";

function Capacities({ capacities })
{
    console.log(capacities);
    return capacities.map((ca) => {
        const [capData, setCapData] = useState([])
        useEffect(() => {
            fetchCapacity(ca).then((answer) => setCapData(answer))
        });
        return (
            <div>{capData.description}</div>
        );
    });
}
export default Capacities;

Capacities.propTypes = {
    capacities:PropTypes.node,
}