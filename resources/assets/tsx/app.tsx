import React from "react";
import ReactDom from "react-dom";
import styled from "styled-components";
import { MySample } from "./components/sample";

const Container = styled.div`
	border: 2px solid #f00;
	border-radius: 6px;
	padding: 16px;

	h2 {
		color: #f00;
	}

	h3 {
		font-style: italic;
	}
`;

const App = () => (
	<Container>
		<h1>Application</h1>
		<h2>I'm ReactJS version {React.version}</h2>
		<p>Below we're using another component</p>
		<MySample />
	</Container>
);

ReactDom.render(<App />, document.getElementById("app"));
