import { List } from '@mantine/core';
import { __, sprintf } from '@wordpress/i18n';

export const Mantine = () => {
  const text = sprintf(
    __(
      'The %s is a collection of React components that are designed to be simple, easy to use, and accessible. The library is built with TypeScript and has a small bundle size, making it a great choice for building modern web applications.',
      'wp-kirk',
    ),
    '<a href="https://mantine.dev/">Mantine UI Library</a>',
  );

  return (
    <>
      <p dangerouslySetInnerHTML={{ __html: text }} />
      <p>{__('Some of the key features of Mantine include:', 'wp-kirk')}</p>
      <p>
        <List size="sm" withPadding>
          <List.Item>
            {__('Simple and easy-to-use components', 'wp-kirk')}
          </List.Item>
          <List.Item>
            {__('Accessible design and keyboard navigation', 'wp-kirk')}
          </List.Item>
          <List.Item>{__('Dark mode support', 'wp-kirk')}</List.Item>
          <List.Item>
            {__('Customizable styles and themes', 'wp-kirk')}
          </List.Item>
          <List.Item>{__('Support for TypeScript', 'wp-kirk')}</List.Item>
          <List.Item>{__('Small bundle size', 'wp-kirk')}</List.Item>
          <List.Item>
            {__('Active development and community support', 'wp-kirk')}
          </List.Item>
          <List.Item>{__('And much more!', 'wp-kirk')}</List.Item>
        </List>
      </p>
    </>
  );
};
