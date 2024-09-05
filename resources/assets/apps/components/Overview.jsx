import { __, sprintf } from '@wordpress/i18n';

export const Overview = () => {
  const text = sprintf(
    __(
      'In this Demo we are using the %s to create a simple tabbed interface. And we are using the %s to handle the routing.',
      'wp-kirk',
    ),
    '<a href="https://mantine.dev/">Mantine UI library</a>',
    '<a href="https://reactrouter.com/en/main">react-router-dom library</a>',
  );
  return (
    <>
      <p>
        {__(
          'This is a React component that is rendered inside a div with the id react-app.',
          'wp-kirk',
        )}
      </p>
      <p>
        {__(
          'The component was created using the official WordPress package for React',
          'wp-kirk',
        )}{' '}
        <a href="https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/">
          @wordpress/scripts
        </a>
        .
      </p>
      <p dangerouslySetInnerHTML={{ __html: text }} />
      <p>
        {__(
          'Obviously, this is a very simple example, but it should give you a good starting point for creating more complex interfaces. And remember, you can use any React library you want, not just Mantine.',
          'wp-kirk',
        )}
      </p>
    </>
  );
};
