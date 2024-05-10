export const Overview = () => {
  return (
    <>
      <p>This is a React component that is rendered inside a div with the id react-app.</p>
      <p>
        The component was created using the official WordPress package for React{' '}
        <a href="https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/">
          @wordpress/scripts
        </a>
        .
      </p>
      <p>
        In this Demo we are using the <a href="https://mantine.dev/">Mantine UI library</a> to create a simple tabbed
        interface. And we are using the <a href="https://reactrouter.com/en/main">react-router-dom library</a> to handle
        the routing.
      </p>
      <p>
        Obviously, this is a very simple example, but it should give you a good starting point for creating more complex
        interfaces. And remember, you can use any React library you want, not just Mantine.
      </p>
    </>
  );
};
