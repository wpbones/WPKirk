import React from "react";
import styled from "styled-components";

/**
 * Styled Component example
 */
const View = styled.div`
	background-color: #fff;
	text-align: center;
	width: 300px;
	border-radius: 16px;
	padding: 16px;

	transition: all 0.3s ease-in-out;

	&:hover {
		box-shadow: 0px 0px 16px rgba(0, 0, 0, 0.25);
		transform: translateY(-4px);
	}
`;

/**
 * Sub component example
 *
 * @returns {React.Component}
 */
export const MySample = () => (
	<View>
		<h1>Hello, I'm a React Component</h1>
		<h2>I'm using Styled Component as well</h2>
		<h3>Move the mouse hover</h3>
	</View>
);
